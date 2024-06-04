<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use core\Utils;

class PassesCtrl
{


    public function __construct()
    {
        App::getSmarty()->assign("isUser", RoleUtils::inRole("user"));
        App::getSmarty()->assign("isWorker", RoleUtils::inRole("worker"));
        App::getSmarty()->assign("isAdmin", RoleUtils::inRole("admin"));
        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');

        App::getSmarty()->assign("conf", App::getConf()->app_url);
    }

    private $services;

    public function action_passes_display()
    {
        $this->action_passes();
        App::getSmarty()->assign('type', $this->services);
        App::getSmarty()->display("passes.html");
    }

    public function action_passes()
    {

        $this->services = App::getDB()->select("type", [
            "id_type",
            "name",
            "price",
            "description",
            "duration"
        ]);

        foreach ($this->services as $index => $service) {
            foreach ($service as $key => $value) {
                // Escape the values expected to be strings in JavaScript
                if (is_string($value)) {
                    $this->services[$index][$key] = addslashes($value);
                }
            }
        }


        App::getSmarty()->assign("day", $this->services[0]);
        App::getSmarty()->assign("night", $this->services[1]);
        App::getSmarty()->assign("forall", $this->services[2]);
    }
}
