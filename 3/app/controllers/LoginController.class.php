<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class LoginController {
    
    public function action_login() {

		$title = App::getConf()->title;
		$server_name = App::getConf()->server_name;
		$protocol = App::getConf()->protocol;
        $location = $protocol . "://" . $server_name;
				
		App::getSmarty()->assign("location",$location);
		
		
		$username = ParamUtils::getFromPost("username");
		$password = ParamUtils::getFromPost("password");
		
		if($username == "test" && $password == "123qwe") {
			RoleUtils::addRole("admin");
			App::getRouter()->redirectTo("admin");
		}
		
        
		App::getSmarty()->assign("title",$title); 
        App::getSmarty()->assign("name","Logowanie"); 			
        App::getSmarty()->display("admin/Login.tpl");
        
    }
	
	 public function action_logout() {
		//unieważnij sesję
		session_destroy();

		// i przekieruj do wybranej akcji (tej domyślnej po wylogowaniu)
		App::getRouter()->redirectTo("");
	 }
    
}
