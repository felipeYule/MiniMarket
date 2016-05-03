<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="adminTTmV4tG";$this->pass="";$this->host="localhost";$this->ddbb="php";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
