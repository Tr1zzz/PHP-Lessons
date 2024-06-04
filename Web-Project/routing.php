<?php

use core\App;
use core\Utils;


App::getRouter()->setDefaultRoute('main'); #default action #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions


Utils::addRoute('main', 'MainCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('login_display', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('singup', 'RegistrationCtrl');
Utils::addRoute('singup_display', 'RegistrationCtrl');
Utils::addRoute('cart', 'CartCtrl');
Utils::addRoute('cart_display', 'CartCtrl', ['user', 'worker']); // Add proper permissions if needed
Utils::addRoute('add_to_cart', 'CartCtrl');
Utils::addRoute('remove_from_cart', 'CartCtrl', ['user']);
Utils::addRoute('staff_passes_display', 'StaffPassesCtrl', ["worker"]);
Utils::addRoute('edit_pass', 'StaffPassesCtrl', ["worker"]);
Utils::addRoute('passes_display', 'PassesCtrl', ['user', 'worker']);
Utils::addRoute('manage_classes', 'ManageClassesCtrl', ["worker"]);
Utils::addRoute('manage_classes_display', 'ManageClassesCtrl');
Utils::addRoute('delete_service', 'ManageClassesCtrl', ["worker"]);
Utils::addRoute('booking', 'BookingCtrl');
Utils::addRoute('booking_display', 'BookingCtrl', ['user', 'worker']);
Utils::addRoute('trainer_gallery', 'MainCtrl');
Utils::addRoute('roles_display', 'RoleRullerCtrl', ["admin"]);
Utils::addRoute('search_user', 'RoleRullerCtrl', ["admin"]);
Utils::addRoute('update_role', 'RoleRullerCtrl', ["admin"]);
