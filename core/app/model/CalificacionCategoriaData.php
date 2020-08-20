<?php
class CalificacionCategoriaData {
	public static $tablename = "calificacion_categoria";


	public function CalificacionCategoriaData(){
		$this->id = "";
		$this->nombre = "";

	}

public function getAlumn(){ return AlumnosData::getById($this->id_alumno); }



	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id order by nombre desc";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CalificacionCategoriaData());
	}


	public static function getAllCal(){
		$sql = "select * from ".self::$tablename." where id=0 or id=4  or id=5 or id= 6 or id=2 order by nombre asc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CalificacionCategoriaData());

	}
	
	public static function getAllCalEx(){
		$sql = "select * from ".self::$tablename." where id=1 or id=8  or id=7 order by nombre asc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CalificacionCategoriaData());

	}
	


}

?>