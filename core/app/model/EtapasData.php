<?php
class EtapasData {
	public static $tablename = "etapa";

	public function EtapasData(){
     	$this->id = "";
	    $this->nombre = "";
	    $this->user_id = "";
		
	}
	
	public static function getById($id){
		 $sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EtapasData());
	}
	
		

	
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new EtapasData());
	}



}

?>