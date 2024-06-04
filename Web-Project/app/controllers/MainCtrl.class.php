<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */

class MainCtrl
{
    public function __construct()
    {


        App::getSmarty()->assign("isUser", RoleUtils::inRole("user"));
        App::getSmarty()->assign("isWorker", RoleUtils::inRole("worker"));
        App::getSmarty()->assign("isAdmin", RoleUtils::inRole("admin"));

        App::getSmarty()->assign("conf", App::getConf()->app_url);
    }
    public function action_main()
    {

        // $variable = 123;

        // App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        // Utils::addInfoMessage("Or even easier message :-)");

        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->display("index.html");
    }

    public function action_login()
    {



        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->display("login.html");
    }
    public function action_singup()
    {



        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->display("singup.html");
    }
    public function action_cart()
    {



        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->display("cart.html");
    }
    public function action_staff_passes()
    {



        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->display("staff_passes.html");
    }
    public function action_passes()
    {



        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->display("passes.html");
    }
    public function action_manage_classes()
    {



        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->display("manage_classes.html");
    }
    public function action_booking()
    {



        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->display("booking.html");
    }
    public function action_trainer_gallery()
    {



        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');
        App::getSmarty()->display("trainer_gallery.html");
    }
}
