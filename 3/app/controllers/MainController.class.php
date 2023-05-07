<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\MinecraftServerStatus;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class MainController {
    
    public function action_main() {

		$status = new MinecraftServerStatus();
		$player_counter =  $status->getStatus('mc.bluemc.pl');
		$title = App::getConf()->title;
		$server_name = App::getConf()->server_name;
		$protocol = App::getConf()->protocol;
        $location = $protocol . "://" . $server_name;
				
		App::getSmarty()->assign("location",$location);  
       
		
        
		App::getSmarty()->assign("title",$title); 
        App::getSmarty()->assign("player_counter",$player_counter['players']);
        App::getSmarty()->assign("name","Strona Główna"); 			
        App::getSmarty()->display("Main.tpl");
        
    }
    
}
