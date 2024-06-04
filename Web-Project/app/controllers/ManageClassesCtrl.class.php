<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use core\ParamUtils;
use core\Utils;
use core\Validator;

class ManageClassesCtrl
{
    private $form = array();
    private $records;

    public function __construct()
    {
        App::getSmarty()->assign("isUser", RoleUtils::inRole("user"));
        App::getSmarty()->assign("isWorker", RoleUtils::inRole("worker"));
        App::getSmarty()->assign("isAdmin", RoleUtils::inRole("admin"));
        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->assign("conf", App::getConf()->app_url);
    }

    public function action_manage_classes_display()
    {
        $this->loadServices();
        App::getSmarty()->assign('services', $this->records);
        App::getSmarty()->display("manage_classes.html");
    }

    private function loadServices()
    {
        try {
            $this->records = App::getDB()->select("service", [
                "id_service",
                "name",
                "time"
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Error while fetching services data.');
            if (App::getConf()->debug) throw $e;  // For debug mode only
        }
    }

    public function validation()
    {
        $this->form["name"] = ParamUtils::getFromRequest("name");
        $this->form["time"] = ParamUtils::getFromRequest("time");

        if (empty($this->form["name"])) {
            Utils::addErrorMessage('Class name cannot be empty.');
            return false;
        }
        if (empty($this->form["time"])) {
            Utils::addErrorMessage('Class time cannot be empty.');
            return false;
        }
        return true;
    }

    public function action_manage_classes()
    {
        $this->validation();
        if ($this->form["name"] && $this->form["time"]) {
            try {
                App::getDB()->insert("service", [
                    "name" => $this->form["name"],
                    "time" => $this->form["time"],
                ]);
                Utils::addInfoMessage("Class added successfully.");
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Error while adding class.');
                if (App::getConf()->debug) throw $e;  // For debug mode only
            }
        }
        $this->action_manage_classes_display();
    }

    public function action_delete_service()
    {
        $serviceId = ParamUtils::getFromPost("delete");

        if ($serviceId) {
            try {
                App::getDB()->delete("service", [
                    "id_service" => $serviceId
                ]);
                Utils::addInfoMessage("Service deleted successfully.");
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Error while deleting service.');
                if (App::getConf()->debug) throw $e;  // For debug mode only
            }
        }

        $this->action_manage_classes_display();
    }
}
