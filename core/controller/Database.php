<?php
class Database {
	public static $db;
	public static $con;
	public static $id;
	
	function Database(){
		$this->users="root";$this->pass="";$this->host="localhost";$this->ddbb="db_ena";
	}

	function connect(){
		$con = new mysqli($this->host,$this->users,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
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
