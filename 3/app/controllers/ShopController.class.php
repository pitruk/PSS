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
class ShopController {
	
	function getItem($id) {
		//SELECT * FROM Przedmioty WHERE Typ='ranga' AND Sort<100 ORDER BY Sort ASC
		$shopitem = App::getDB()->select("Przedmioty", "*",[
		"ID" => $id,
		]);
		App::getSmarty()->assign("shopitem",$shopitem[0]);
	}
	
	function getShopRanks() {
		//SELECT * FROM Przedmioty WHERE Typ='ranga' AND Sort<100 ORDER BY Sort ASC
		$items = App::getDB()->select("Przedmioty", "*",[
		"Typ" => "ranga",
		"Sort[<]" => 100,
		"ORDER" => [
			"Sort" => "ASC"
		]
		]);
		App::getSmarty()->assign("items",$items);
	}
	
	function getShopTokens() {
		//SELECT * FROM Przedmioty WHERE Typ='tokeny' AND Sort<100 ORDER BY Sort ASC
		$items = App::getDB()->select("Przedmioty", "*",[
		"Typ" => "tokeny",
		"Sort[<]" => 100,
		"ORDER" => [
			"Sort" => "ASC"
		]
		]);
		App::getSmarty()->assign("items",$items);
	}
    
    public function action_sklep() {
		        
		$shop_type = ParamUtils::getFromCleanURL(1);
		$shop_item = ParamUtils::getFromCleanURL(2);
		
		$title = App::getConf()->title;
		
		$last_buyers_page = ParamUtils::getFromGet("page");

		$last_buyer = App::getDB()->select("Zakupy", "*",[
		"LIMIT" => 1,
		"ORDER" => [
			"ID" => "DESC"
		]
		]);
		
       $last_buyers_count = App::getConf()->last_buyers_count;
	   foreach ($last_buyer as $lb) {
	   
			
			$buyers = App::getDB()->select("Zakupy", "*",[
			"ID[<=]" => ($lb["ID"] - (App::getConf()->last_buyers_count*($last_buyers_page-1))),
			"LIMIT" => App::getConf()->last_buyers_count,
			"ORDER" => [
				"ID" => "DESC"
			]
			]);
		
	   }
	   
	   if ($last_buyers_page < 1) $last_buyers_page = 1;	 
	   $prev = $last_buyers_page-1;
	   if ($prev < 1) $prev = 1;
	   $next = $last_buyers_page+1;
		
		$server_name = App::getConf()->server_name;
		$protocol = App::getConf()->protocol;
        $location = $protocol . "://" . $server_name;
				
		App::getSmarty()->assign("location",$location);  
		
		App::getSmarty()->assign("title",$title);  
        App::getSmarty()->assign("name","SKLEP"); 	
		App::getSmarty()->assign("buyers",$buyers);
		App::getSmarty()->assign("shop_type",$shop_type);
		App::getSmarty()->assign("prev_button",$prev);
		App::getSmarty()->assign("next_button",$next);
		
		if($shop_type == "rangi") {
			if($shop_item != null) {
				$this->getItem($shop_item);
				App::getSmarty()->display("shop/ShopItem.tpl");
			} else {
				$this->getShopRanks();
				App::getSmarty()->display("shop/ShopChooser.tpl");
			}
		} else if($shop_type == "tokeny") {
			if($shop_item != null) {
				$this->getItem($shop_item);
				App::getSmarty()->display("shop/ShopItem.tpl");
			} else {
				$this->getShopTokens();
				App::getSmarty()->display("shop/ShopChooser.tpl");
			}
		} else {
			App::getSmarty()->display("shop/Shop.tpl");
		}
		
        
    }
	
    
}