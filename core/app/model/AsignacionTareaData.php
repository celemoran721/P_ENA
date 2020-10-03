<?php
class AsignacionTareaData {
	public static $tablename = "asignacion_tarea";

	public function AsignacionTareaData(){
     	$this->id = "";
	 //   $this->nombres = "";
		$this->id_tarea = "";
		$this->estado= "";
		$this->id_materia = "";
		$this->id_bimestre = "";
	    $this->persona_id = "";
		$this->creacion = "NOW()";
		
	}
public function getProfesor(){ return PersonaData::getById($this->persona_id); }
public function getTarea(){ return TareaData::getById($this->tarea); }
public function getMateria(){ return MateriasData::getById($this->id_materia); }
	
	public function addtar(){
		$sql = "insert into ".self::$tablename." (id_tarea,id_materia,id_bimestre,persona_id,creacion) ";
		$sql .= "value (\"$this->id_tarea\",\"$this->id_materia\",\"$this->id_bimestre\",\"$this->persona_id\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id_tarea=$id";
		//print_r($sql);
		Executor::doit($sql);
	}


	
public static function getById($id){
		 $sql = "select *from ".self::$tablename." where id_tarea=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AsignacionTareaData());
	}	
	
	
		
public static function getByIdMatBim($idmat,$idbim){
		 $sql = "select *from ".self::$tablename." where id_materia=$idmat and id_bimestre=$idbim";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AsignacionTareaData());
	}	

	
public function updateAs(){
	  $sql = "update ".self::$tablename." set  estado=\"$this->estado\", 
		persona_id=\"$this->persona_id\" where id_tarea=$this->id_tarea";
		//print_r($sql);
	Executor::doit($sql);
	}	
	

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new AsignacionTareaData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombres like '%$q%'";
		$query = Executor::doit($sql);
		//
		return Model::many($query[0],new ProfesoresData());
        
	}
	
	public static function getAllCountCal($id,$bim){
		$sql = "select id_materia as mat, id_tarea as cat, count(id_tarea) as  val from ".self::$tablename." 
		where   id_materia=$id and id_bimestre=$bim group by id_materia";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new AsignacionTareaData();
			
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