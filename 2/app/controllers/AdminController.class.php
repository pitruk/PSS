<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class AdminController {
    
    public function action_admin() {

		$title = App::getConf()->title;
		$server_name = App::getConf()->server_name;
		$protocol = App::getConf()->protocol;
        $location = $protocol . "://" . $server_name;
				
		App::getSmarty()->assign("location",$location);  
       
		
        
		App::getSmarty()->assign("title",$title); 
        App::getSmarty()->assign("name","Panel Administracyjny"); 			
        App::getSmarty()->display("admin/Admin.tpl");
        
    }
    
}
