<?php
	require_once "connection.php";
	class ModelBookings{

		/*===================================
		=            Insert User            =
		===================================*/
		
		static public function mdlBook($table, $data){
			$stmt=Connection::connect()->prepare("INSERT INTO $table(name, surname, /*checkin, checkout,*/ createdby, status) VALUES (:name, :surname, /*:checkin, :checkout,*/ :createdby, :status)");
			$stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
			$stmt->bindParam(":surname", $data["surname"], PDO::PARAM_STR);
			//$stmt->bindParam(":checkin", $data["checkin"], PDO::PARAM_STR);
			//$stmt->bindParam(":checkout", $data["checkout"], PDO::PARAM_STR);
			$stmt->bindParam(":createdby", $data["createdby"], PDO::PARAM_STR);
			$stmt->bindParam(":status", $data["status"], PDO::PARAM_STR);
			if($stmt->execute()){
				return "ok";
			}else{
				return "error";
			}
			$stmt->close();
			$stmt=null;
		}
	}