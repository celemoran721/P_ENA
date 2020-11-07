<?php
class NotaTareaData {
	public static $tablename = "nota_tarea";

	public function NotaTareaData(){
     	$this->id = "";
	 //   $this->nombres = "";
		$this->nota = "";
		$this->comentario = "";
	    $this->persona_id = "";
		$this->entrega_id = "";
		$this->creacion = "NOW()";
		
	}
	public function getAlumn(){ return PersonaData::getById($this->id_alumno); }
	public function getPadre(){ return PersonaData::getById($this->id_padre); }
	public function getGrado(){ return GradosData::getById($this->id_grado); }
	

	
	
	public function addnota(){
		$sql = "insert into ".self::$tablename." (nota,comentario,persona_id,entrega_id,creacion) ";
		$sql .= "value (\"$this->nota\",\"$this->comentario\",\"$this->persona_id\",\"$this->entrega_id\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
	public function addnotaN(){
		$sql = "insert into ".self::$tablename." (nota,comentario,persona_id,id_alumno,id_tarea,creacion) ";
		$sql .= "value (\"$this->nota\",\"$this->comentario\",\"$this->persona_id\",\"$this->id_alumno\",\"$this->id_tarea\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
	public static function getAllByNota($id){
		 $sql = "select * from ".self::$tablename." where entrega_id=$id ";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new NotaTareaData());
	}
	
	public static function getAllByNotaNo($id_ta,$id_al){
		 $sql = "select * from ".self::$tablename." where id_tarea=$id_ta and id_alumno=$id_al ";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new NotaTareaData());
	}
	
	public static function getAllByNotaT($id_ta,$id_al){
		 $sql = "select * from ".self::$tablename." where id_tarea=$id_ta and id_alumno=$id_al ";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new NotaExamenData());
	}
	
	public static function getTodasNota($id){
		 $sql = "select * from ".self::$tablename." where entrega_id=$id ";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new NotaTareaData());
	}
	
		

	public static function getById($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AnuncioData());
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