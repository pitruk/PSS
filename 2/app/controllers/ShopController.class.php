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
       
		$buyers = App::getDB()->select("Zakupy", "*",[
		"LIMIT" => 14,
		"ORDER" => [
			"ID" => "DESC"
		]
		]);
		
		$server_name = App::getConf()->server_name;
		$protocol = App::getConf()->protocol;
        $location = $protocol . "://" . $server_name;
				
		App::getSmarty()->assign("location",$location);  
		
		App::getSmarty()->assign("title",$title);  
        App::getSmarty()->assign("name","SKLEP"); 	
		App::getSmarty()->assign("buyers",$buyers);
		App::getSmarty()->assign("shop_type",$shop_type);
		
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