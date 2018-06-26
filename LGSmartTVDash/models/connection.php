<?php

class Connection{
	static public function connect(){
		$link=new PDO("mysql:host=localhost;dbname=pcdapi", "root", "");
		//$link=new PDO("mysql:host=sql311.epizy.com;dbname=epiz_22271462_motoristas", "epiz_22271462", "hlOPXWdzohHa");
		$link->exec("set names utf8");
		return $link;

	}
}