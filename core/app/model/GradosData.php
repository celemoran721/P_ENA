<?php
class GradosData {
	public static $tablename = "grado";

	public function GradosData(){
     	$this->id = "";
		//$this->id_grado = "";
	    $this->nombre = "";
		$this->id_etapa = "";
	    //$this->id_grado="";
	    $this->user_id = "";
		$this->creacion = "now()";
		
	}
	
	public function getUser(){ return UserData::getById($this->user_id);}
    public function getEtapa(){ return EtapasData::getById($this->id_etapa);}
	public function getGrado(){ return GradosData::getById($this->id);}
	public function getMateria(){ return MateriasData::getById($this->id);}
	

	
	
	public function add(){
		$sql = "insert into ".self::$tablename." (nombre, id_etapa, user_id, creacion) ";
		$sql .= "value (\"$this->nombre\", \"$this->id_etapa\", \"$this->user_id\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}


	
	public function update(){
	    $sql = "update ".self::$tablename." set nombre=\"$this->nombre\", 
		id_etapa=\"$this->id_etapa\", user_id=\"$this->user_id\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}	
	
		

	public static function getById($id){
		 $sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new GradosData());
	}
	
		

	public static function getAllByDate($start,$end){
  $sql = "select * from ".self::$tablename." where date(anio_edicion) >= \"$start\" and date(anio_edicion) <= \"$end\"  order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LibrosData());

	}
	
	public static function getAllByGradoId($id){
		$sql = "select * from ".self::$tablename." where id_grado=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new GradosData());
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
	
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new GradosData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new GradosData());

	}


}

?>