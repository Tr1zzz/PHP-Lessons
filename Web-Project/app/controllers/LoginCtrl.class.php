<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use core\ParamUtils;
use core\Message;

class LoginCtrl
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
    public function addRoles()
    {
        $results = App::getDB()->select("account", ["role"], [
            "username" => $this->form["username"]
        ]);


        //for ($i = 0; $i < count($results); $i++) {
        switch ($results[0]["role"]) {
            case "user":
                RoleUtils::addRole("user");
                break;

            case "worker":
                RoleUtils::addRole("worker");
                break;

            case "admin":
                RoleUtils::addRole("admin");
                break;
        }
        //}
    }

    public function action_login_display()
    {
        App::getSmarty()->display("login.html");
    }

    public function validation()
    {
        $this->form["username"] = ParamUtils::getFromRequest("username");
        $this->form["password"] = ParamUtils::getFromRequest("password");

        $user = App::getDB()->select("account", ["username", "password"], [
            "username" => $this->form["username"],
            "password" => $this->form["password"]
        ]);

        if (!isset($user[0]["username"])) {
            App::getMessages()->addMessage(new Message("Login lub hasło jest niepoprawne", Message::ERROR));

            $this->action_login_display();
            exit();
        }

        if (!isset($user[0]["password"])) {
            App::getMessages()->addMessage(new Message("Login lub hasło jest niepoprawne", Message::ERROR));

            $this->action_login_display();
            exit();
        }
    }

    public function action_login()
    {
        $this->validation();

        $this->addRoles();

        App::getRouter()->forwardTo("main");
    }

    public function action_logout()
    {
        session_destroy();
        App::getRouter()->redirectTo("main");
    }
}
