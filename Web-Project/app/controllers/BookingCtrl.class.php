<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use core\Utils;

class BookingCtrl
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

    public function action_booking_display()
    {
        $this->action_booking();
        App::getSmarty()->assign('services', $this->services);
        App::getSmarty()->display("booking.html");
    }

    public function action_booking()
    {

        $this->services = App::getDB()->select("service", [
            "id_service",
            "name",
            "time"
        ]);
    }
}
