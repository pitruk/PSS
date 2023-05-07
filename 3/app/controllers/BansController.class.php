<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class BansController {
	
	    public function action_kary() {
	
			$title = App::getConf()->title;
			$server_name = App::getConf()->server_name;
			$protocol = App::getConf()->protocol;
			$location = $protocol . "://" . $server_name;
					
			App::getSmarty()->assign("location",$location); 		   
			
			
			App::getSmarty()->assign("title",$title); 
			App::getSmarty()->assign("name","Kary"); 			
			App::getSmarty()->display("bans/Bans.tpl");
		
		}
    
}