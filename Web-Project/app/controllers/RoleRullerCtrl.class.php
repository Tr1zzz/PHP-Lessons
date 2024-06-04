<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use core\ParamUtils;
use core\Utils;

class RoleRullerCtrl
{
    public function __construct()
    {
        App::getSmarty()->assign("isUser", RoleUtils::inRole("user"));
        App::getSmarty()->assign("isWorker", RoleUtils::inRole("worker"));
        App::getSmarty()->assign("isAdmin", RoleUtils::inRole("admin"));
        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');

        App::getSmarty()->assign("conf", App::getConf()->app_url);
    }

    public function action_roles_display()
    {
        $users = App::getDB()->select("account", ["id_account", "username", "role"]);
        App::getSmarty()->assign('users', $users);
        App::getSmarty()->display("roles.html");
    }

    public function action_search_user()
    {
        $search = ParamUtils::getFromRequest('search');
        $users = App::getDB()->select("account", ["id_account", "username", "role"], [
            "username[~]" => $search
        ]);
        App::getSmarty()->assign('users', $users);
        App::getSmarty()->display("roles.html");
    }

    public function action_update_role()
    {
        $accountId = ParamUtils::getFromRequest('id_account');
        $role = ParamUtils::getFromRequest('role');
        App::getDB()->update("account", ["role" => $role], ["id_account" => $accountId]);
        Utils::addInfoMessage('Role updated successfully.');
        App::getRouter()->redirectTo("roles_display");
    }
}
