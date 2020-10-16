<?php
class AsignacionExamenData {
	public static $tablename = "asignacion_examen";

	public function AsignacionExamenData(){
     	$this->id = "";
	 //   $this->nombres = "";
		$this->id_examen = "";
		$this->estado= "";
		$this->id_materia = "";
		$this->id_bimestre = "";
	    $this->persona_id = "";
		$this->creacion = "NOW()";
		
	}
public function getProfesor(){ return PersonaData::getById($this->persona_id); }
public function getMateria(){ return MateriasData::getById($this->id_materia); }
	
	public function addex(){
		$sql = "insert into ".self::$tablename." (id_examen,id_materia,id_bimestre,persona_id,creacion) ";
		$sql .= "value (\"$this->id_examen\",\"$this->id_materia\",\"$this->id_bimestre\",\"$this->persona_id\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public static function delByIdTa($id){
		$sql = "delete from ".self::$tablename." where id_exmen=$id";
		Executor::doit($sql);
	}

	
public static function getById($id){
		 $sql = "select * from ".self::$tablename." where id_examen=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new AsignacionExamenData());
	}	
	
	
	
	public static function getByIdAsig($id){
		 $sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new AsignacionExamenData());
	}	
	
	public static function getAllById($id){
		 $sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AsignacionExamenData());
	}	
	
	public static function getByIdAs($id){
		 $sql = "select *from ".self::$tablename." where id_examen=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new AsignacionExamenData());
	}	
	
	
		
public static function getByIdMatBim($idmat,$idbim){
		 $sql = "select *from ".self::$tablename." where id_materia=$idmat and id_bimestre=$idbim";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AsignacionExamenData());
	}	
	
	public static function getByIdEx($idmat){
		 $sql = "select *from ".self::$tablename." where id_examen=$idmat";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new AsignacionExamenData());
	}
	
public function updateEx(){
	  $sql = "update ".self::$tablename." set  estado=\"$this->estado\", 
		persona_id=\"$this->persona_id\" where id_examen=$this->id_examen";
		//print_r($sql);
	Executor::doit($sql);
	}	
	

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new AsignacionExamenData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombres like '%$q%'";
		$query = Executor::doit($sql);
		//
		return Model::many($query[0],new ProfesoresData());
        
	}
	
	public static function getAllCountCal($id,$bim){
		$sql = "select id_materia as mate, id_examen as cat, count(id_examen) as  val from ".self::$tablename." 
		where   id_materia=$id and id_bimestre=$bim group by id_materia";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new AsignacionExamenData();
			
			$array[$cnt]->mate = $r['mate'];
			$array[$cnt]->cat = $r['cat'];
			$array[$cnt]->val = $r['val'];
			
			
			
			$cnt++;
		}
		//print_r($sql);
		return $array;
	}


}

?>