<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;

class RegistrationCtrl
{

    private $form = array();

    public function __construct()
    {
        App::getSmarty()->assign("isUser", RoleUtils::inRole("user"));
        App::getSmarty()->assign("isWorker", RoleUtils::inRole("worker"));
        App::getSmarty()->assign("isAdmin", RoleUtils::inRole("admin"));
        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');

        App::getSmarty()->assign("conf", App::getConf()->app_url);
    }

    public function action_singup_display()
    {
        App::getSmarty()->display("singup.html");
    }

    public function validation()
    {
        $this->form["username"] = ParamUtils::getFromRequest("username");
        $this->form["password"] = ParamUtils::getFromRequest("password");
        $this->form["firstName"] = ParamUtils::getFromRequest("firstName");
        $this->form["lastName"] = ParamUtils::getFromRequest("lastName");
        $this->form["phoneNumber"] = ParamUtils::getFromRequest("phoneNumber");
    }

    public function action_singup()
    {


        $this->validation();
        App::getDB()->insert("account", [
            "username" => $this->form["username"],
            "password" => $this->form["password"],
            "firstName" => $this->form["firstName"],
            "lastName" => $this->form["lastName"],
            "phoneNumber" => $this->form["phoneNumber"],
            "role" => 'user'
        ]);

        App::getRouter()->forwardTo("main");
    }
}
