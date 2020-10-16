<?php
class PreguntasData {
	public static $tablename = "preguntas";

	public function PreguntasData(){
     	$this->id = "";
	 //   $this->nombres = "";
		$this->pregunta = "";
		$this->r_1 = "";
		$this->r_2 = "";
		$this->r_3 = "";
		$this->r_4 = "";
		$this->r_5 = "";
		$this->correcta = "";
		$this->valor = "";
	    $this->persona_id = "";
		$this->creacion = "NOW()";
		
	}
	public function getProfesor(){ return PersonaData::getById($this->persona_id); }
	public function getAlumno(){ return PersonaData::getById($this->persona_id); }
	
	
	public function addexa(){
		$sql = "insert into ".self::$tablename." (pregunta, r_1, r_2, r_3, r_4, r_5, valor, correcta, persona_id,creacion) ";
		$sql .= "value (\"$this->pregunta\",\"$this->r_1\",\"$this->r_2\",\"$this->r_3\",\"$this->r_4\",\"$this->r_5\",
		\"$this->valor\",\"$this->correcta\",\"$this->persona_id\",$this->creacion)";
		print_r($sql);
		return Executor::doit($sql);
	}

	public static function getById($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new PreguntasData());
	}
	
	public static function getfecha(){
		 $sql = "select curdate() as f";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new PreguntasData());
	}
	
		public static function getByIdOne($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new PreguntasData());
	}
	
	public static function getByIdTa($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new PreguntasData());
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