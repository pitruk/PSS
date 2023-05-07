<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('main'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('main', 'MainController');
Utils::addRoute('sklep', 'ShopController');
Utils::addRoute('login', 'LoginController');
Utils::addRoute('logout', 'LoginController');
Utils::addRoute('kary', 'BansController');
Utils::addRoute('admin', 'AdminController',["admin"]);

//Utils::addRoute('action_name', 'controller_class_name');