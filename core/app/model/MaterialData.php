<?php
class MaterialData {
	public static $tablename = "material";

	public function MaterialData(){
     	$this->id = "";
	 //   $this->nombres = "";
		$this->titulo = "";
		$this->descripcion = "";
		$this->documento = "";
	    $this->persona_id = "";
		$this->creacion = "NOW()";
		
	}
	public function getAlumn(){ return PersonaData::getById($this->id_alumno); }
	public function getPadre(){ return PersonaData::getById($this->id_padre); }
	public function getGrado(){ return GradosData::getById($this->id_grado); }
	
	public function getUser(){ return UserData::getById($this->user_id);}
	
	
	public function add_material(){
		$sql = "insert into ".self::$tablename." (titulo,descripcion,documento,persona_id,creacion) ";
		$sql .= "value (\"$this->titulo\",\"$this->descripcion\",\"$this->documento\",\"$this->persona_id\",$this->creacion)";
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
		documento=\"$this->documento\", persona_id=\"$this->persona_id\" where id=$this->id";
		//print_r($sql);
	Executor::doit($sql);
	}	
	
	
	
		

	public static function getById($id){
		 $sql = "select *from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new MaterialData());
	}
	
	
	
	public static function getAllCountCal($id){
		$sql = "select id_materia as mat, id_tarea as cat, count(id_tarea) as  val from ".self::$tablename." 
		where   id_materia=$id group by id_tarea";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new MaterialMateriaData();
			
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