<?php
class ExamenData {
	public static $tablename = "examen";

	public function ExamenData(){
     	$this->id = "";
	 //   $this->nombres = "";
		$this->nombre = "";
		$this->descripcion = "";
		$this->valor = "";
		$this->f_entrega = "";
	    $this->persona_id = "";
		$this->creacion = "NOW()";
		
	}
	public function getProfesor(){ return PersonaData::getById($this->persona_id); }
	public function getAlumno(){ return PersonaData::getById($this->persona_id); }
	
	
	public function addex(){
		$sql = "insert into ".self::$tablename." (nombre, descripcion, valor, tiempo, c_preguntas, f_entrega,persona_id,creacion) ";
		$sql .= "value (\"$this->nombre\",\"$this->descripcion\",\"$this->valor\",\"$this->tiempo\",\"$this->c_preguntas\",\"$this->f_entrega\",
		\"$this->persona_id\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public static function getById($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new ExamenData());
	}
	
	public static function getfecha(){
		 $sql = "select curdate() as f";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new ExamenData());
	}
	
		public static function getByIdOne($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new ExamenData());
	}
	
	public static function getByIdTa($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new ExamenData());
	}
	
	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}

public function updateEx(){
	  $sql = "update ".self::$tablename." set  nombre=\"$this->nombre\",descripcion=\"$this->descripcion\", 
		valor=\"$this->valor\",tiempo=\"$this->tiempo\",c_preguntas=\"$this->c_preguntas\",
		f_entrega=\"$this->f_entrega\",persona_id=\"$this->persona_id\" where id=$this->id";
		//print_r($sql);
	Executor::doit($sql);
	}	
	


}

?>