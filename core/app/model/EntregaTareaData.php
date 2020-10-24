<?php
class EntregaTareaData {
	public static $tablename = "entrega_tarea";

	public function EntregaTareaData(){
     	$this->id = "";
	 //   $this->nombres = "";
		$this->comentario = "";
		$this->documento = "";
		$this->id_tarea = "";
	    $this->persona_id = "";
		$this->creacion = "NOW()";
		
	}
	public function getAlumn(){ return PersonaData::getById($this->id_alumno); }
	public function getPadre(){ return PersonaData::getById($this->id_padre); }
	public function getGrado(){ return GradosData::getById($this->id_grado); }
	
	public function getUser(){ return UserData::getById($this->user_id);}
	
	public function getAlumno(){ return PersonaData::getById($this->persona_id); }
	
	
	public function add_entrega_tarea(){
		$sql = "insert into ".self::$tablename." (comentario,documento,persona_id,id_tarea,creacion) ";
		$sql .= "value (\"$this->comentario\",\"$this->documento\",\"$this->persona_id\",\"$this->id_tarea\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		//print_r($sql);
		Executor::doit($sql);
	}

	
public function updateA(){
	  $sql = "update ".self::$tablename." set  titulo=\"$this->titulo\",descripcion=\"$this->descripcion\", 
		persona_id=\"$this->persona_id\" where id=$this->id";
		//print_r($sql);
	Executor::doit($sql);
	}	
	
	
	
		

	public static function getById($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new EntregaTareaData());
	}
	
	public static function getByIdO($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new EntregaTareaData());
	}
	
	public static function getAllByTa($id,$per){
		 $sql = "select * from ".self::$tablename." where id_tarea=$id and persona_id=$per";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new EntregaTareaData());
	}
	
	public static function getTodasTa($id,$per){
		 $sql = "select * from ".self::$tablename." where id_tarea=$id and persona_id=$per";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new EntregaTareaData());
	}
	
	public static function getAllByTaCo($id){
		 $sql = "select comentario from ".self::$tablename." where id_tarea=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new EntregaTareaData());
	}
	
	public static function getByIdEn($id_ta,$id_per){
		 $sql = "select *from ".self::$tablename." where id_tarea=$id_ta and persona_id=$id_per";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new EntregaTareaData());
	}
	
	
	
	public static function getAllCountCal($id){
		$sql = "select id_materia as mat, id_tarea as cat, count(id_tarea) as  val from ".self::$tablename." 
		where   id_materia=$id group by id_tarea";
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