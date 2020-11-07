<?php
class EntregaExamenData {
	public static $tablename = "entrega_examen";

	public function EntregaExamenData(){
     	$this->id = "";
	 //   $this->nombres = "";
		$this->comentario = "";
		$this->documento = "";
		$this->id_examen = "";
	    $this->persona_id = "";
		$this->creacion = "NOW()";
		
	}
	public function getAlumn(){ return PersonaData::getById($this->id_alumno); }
	public function getPadre(){ return PersonaData::getById($this->id_padre); }
	public function getGrado(){ return GradosData::getById($this->id_grado); }
	
	public function getUser(){ return UserData::getById($this->user_id);}
	
	public function getAlumno(){ return PersonaData::getById($this->persona_id); }
	
	
	public function add_entrega_examen(){
		$sql = "insert into ".self::$tablename." (comentario,documento,persona_id,id_examen,creacion) ";
		$sql .= "value (\"$this->comentario\",\"$this->documento\",\"$this->persona_id\",\"$this->id_examen\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		//print_r($sql);
		Executor::doit($sql);
	}


	
	
		

	public static function getById($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new EntregaExamenData());
	}
	
	public static function getByIdO($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new EntregaExamenData());
	}
	
	public static function getAllByTa($id,$per){
		 $sql = "select * from ".self::$tablename." where id_examen=$id and persona_id=$per";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new EntregaExamenData());
	}
	
	public static function getTodosEx($id,$per){
		 $sql = "select * from ".self::$tablename." where id_examen=$id and persona_id=$per";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new EntregaExamenData());
	}
	
	public static function getAllByTaCo($id){
		 $sql = "select comentario from ".self::$tablename." where id_examen=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new EntregaExamenData());
	}
	
	public static function getByIdEn($id_ta,$id_per){
		 $sql = "select *from ".self::$tablename." where id_examen=$id_ta and persona_id=$id_per";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new EntregaExamenData());
	}
	
	
	
	public static function getAllCountCal($id){
		$sql = "select id_materia as mat, id_examen as cat, count(id_examen) as  val from ".self::$tablename." 
		where   id_materia=$id group by id_examen";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new AnuncioMateriaData();
			
			$array[$cnt]->mat = $r['mat'];
			$array[$cnt]->cat = $r['cat'];
			$array[$cnt]->val = $r['val'];
			
			
			
			$cnt++;
		}
		//print_r($sql);
		return $array;
	}


}

?>