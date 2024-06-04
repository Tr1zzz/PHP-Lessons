<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;

class StaffPassesCtrl
{
    public function __construct()
    {
        App::getSmarty()->assign("isUser", RoleUtils::inRole("user"));
        App::getSmarty()->assign("isWorker", RoleUtils::inRole("worker"));
        App::getSmarty()->assign("isAdmin", RoleUtils::inRole("admin"));
        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->assign("conf", App::getConf()->app_url);
    }

    private $passes;

    public function action_staff_passes_display()
    {
        $this->loadPasses();
        App::getSmarty()->assign('passes', $this->passes);
        App::getSmarty()->display("staff_passes.html");
    }

    private function loadPasses()
    {
        $this->passes = App::getDB()->select("type", [
            "id_type",
            "name",
            "price",
            "description",
            "duration"
        ]);
    }

    public function action_edit_pass()
    {
        $passType = ParamUtils::getFromRequest('pass_type');
        $description = ParamUtils::getFromRequest('description');
        $price = ParamUtils::getFromRequest('price');
        $duration = ParamUtils::getFromRequest('duration');

        if ($passType && $description && $price && $duration) {
            App::getDB()->update("type", [
                "description" => $description,
                "price" => $price,
                "duration" => $duration
            ], [
                "id_type" => $passType
            ]);

            Utils::addInfoMessage('Pass updated successfully.');
            App::getRouter()->redirectTo("staff_passes_display");
        } else {
            Utils::addErrorMessage('Error updating pass.');
        }
    }
}
