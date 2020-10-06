<?php
class TareaData {
	public static $tablename = "tarea";

	public function TareaData(){
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
	
	
	public function addtar(){
		$sql = "insert into ".self::$tablename." (nombre, descripcion, valor, f_entrega,persona_id,creacion) ";
		$sql .= "value (\"$this->nombre\",\"$this->descripcion\",\"$this->valor\",\"$this->f_entrega\",\"$this->persona_id\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public static function getById($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new TareaData());
	}
	
		public static function getByIdOne($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new TareaData());
	}
	
	public static function getByIdTa($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new TareaData());
	}
	
	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}

public function updateT(){
	  $sql = "update ".self::$tablename." set  nombre=\"$this->nombre\",descripcion=\"$this->descripcion\", 
		valor=\"$this->valor\",f_entrega=\"$this->f_entrega\",persona_id=\"$this->persona_id\" where id=$this->id";
		//print_r($sql);
	Executor::doit($sql);
	}	
	


}

?>