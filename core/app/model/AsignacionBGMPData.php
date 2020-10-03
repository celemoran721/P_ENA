<?php
class AsignacionBGMPData {
	public static $tablename = "asignacion_bgmp";

	public function AsignacionBGMPData(){
     	$this->id = "";
		$this->id_materia = "";
		$this->id_grado = "";
		$this->id_bimestre = "";
		$this->id_profesor = "";
	    $this->id_usuario = "";
		$this->id_calname="";
		$this->creacion = "NOW()";
		
	}
	
	public function getUser(){ return UserData::getById($this->id_usuario);}
    public function getProfesor(){ return PersonaData::getById($this->id_profesor);}
    public function getGrado(){ return GradosData::getById($this->id_grado);}
	public function getMateria(){ return MateriasData::getById($this->id_materia);}
	public function getBimestre(){ return BimestresData::getById($this->id_bimestre);}
	
	
	public function add(){
		$sql = "insert into ".self::$tablename." (id_materia, id_grado, id_profesor, id_usuario,  creacion) ";
		$sql .= "value ( \"$this->id_materia\", \"$this->id_grado\",
		\"$this->id_profesor\", \"$this->id_usuario\",$this->creacion)";
	//print_r($sql);
		return Executor::doit($sql);
	}
	
	public function addCal(){
		$sql = "insert into ".self::$tablename." (id_cal,id_bimestre,id_profesor,id_usuario,id_calname,id_materia,creacion) ";
		$sql .= "value ( \"$this->id_cal\",  \"$this->id_bimestre\",
		\"$this->id_profesor\", \"$this->id_usuario\",\"$this->id_calname\",\"$this->id_materia\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);}
	

public static function getAllByGradoId($id){
		$sql = "select * from ".self::$tablename." where id_grado=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AsignacionBGMPData());
	}


	
	public static function getAllByProfMatId($id){
		$sql = "select * from ".self::$tablename." where id_profesor=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new AsignacionBGMPData());
	}
	
	
	public static function getAllByMat($id){
		$sql = "select * from ".self::$tablename." where id_materia=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new AsignacionBGMPData());
	}
	
	
	public static function getAllByMatAsignadas($idprof,$idmat){
		$sql = "select * from ".self::$tablename." where id_profesor=$idprof and id_materia=$idmat";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AsignacionBGMPData());
	}
	
		public static function getAllBy($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new AsignacionBGMPData());
		print_r($sql);
	}

	//public static function delById($id){
	//	$sql = "delete from ".self::$tablename." where id=$id";
	//	Executor::doit($sql);
	//}
	
	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
		//print_r($sql);
	}
	


public function del(){
		$sql = "delete from ".self::$tablename." where id_materia=$this->id_materia and id_grado=$this->id_grado";
		Executor::doit($sql);
	}
	
	public static function getAllByCount($id){
		 $sql = "select COUNT(*) as val from ".self::$tablename." where id_grado=$id";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new AsignacionBGMPData();
			
			$array[$cnt]->val = $r['val'];
			
			$cnt++;
		}
		return $array;
	}
	

	
	public function update(){
	    $sql = "update ".self::$tablename." set id_profesor=\"$this->id_profesor\", id_grado=\"$this->id_grado\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}	
	
	
	public static function getByIdMa($materia){
		 $sql = "select * from ".self::$tablename." where id=$materia";
		$query = Executor::doit($sql);
		return Model::one($query[0],new AsignacionBGMPData());
	}
	
		

	public static function getAllByDate($start,$end){
  $sql = "select * from ".self::$tablename." where date(anio_edicion) >= \"$start\" and date(anio_edicion) <= \"$end\"  order by creacion desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LibrosData());

	}
	
	public static function getidMax(){
		$sql = "select 	MAX(id) AS maxid from ".self::$tablename;
		$query = Executor::doit($sql);
		$found = null;
		$data = new LibrosData();
		
		while($r = $query[0]->fetch_array()){
			$data->id = $r['maxid'];
			$found = $data;
			break;
		}
		return $found;
	}	
	
	public static function getAllByTeamId($id){
		$sql = "select * from ".self::$tablename." where id_grado=$id";
	    $query = Executor::doit($sql);
	 	return Model::many($query[0],new AsignacionBGMPData());
	}
	
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new AsignacionBGMPData());
	}
	
	public static function getAllDesc(){
		
		$sql = "select * from ".self::$tablename. " order by id_grado desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new AsignacionBGMPData());
	}
//" where person_id=$person_id  and estado = 'pendiente' order by creacion desc";

	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LibrosData());

	}
	
	public static function getAllEx($id){
		$sql = "select * from ".self::$tablename." where id_materia=$id ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new AsignacionBGMPData());
	  // print_r($sql);
	}

	public static function getAllMatProfBy($id_prof,$id_mat){
		$sql = "select * from ".self::$tablename." 
		where  id_profesor=$id_prof and id_materia=$id_mat ";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new AsignacionBGMPData());
		;
	}
	
	public static function getAllIdAs($id_mat){
		$sql = "select * from ".self::$tablename." 
		where  id_materia=$id_mat ";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new AsignacionBGMPData());
		;
	}


public static function getAllCountCal($id_prof,$id_mat,$id_bim){
		$sql = "select id_materia as mat, id_calname as cat, count(id_calname) as  val from ".self::$tablename." 
		where  id_profesor=$id_prof and id_materia=$id_mat and id_bimestre=$id_bim group by id_calname";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new AsignacionBGMPData();
			
			$array[$cnt]->mat = $r['mat'];
			$array[$cnt]->cat = $r['cat'];
			$array[$cnt]->val = $r['val'];
			
			
			
			$cnt++;
		}
		return $array;
	}

}

?>