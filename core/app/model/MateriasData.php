<?php
class MateriasData {
	public static $tablename = "materia";

	public function MateriasData(){
     	$this->id = "";
	    $this->nombre = "";
	    $this->id_usuario = "";
		$this->id_grado = "";
		$this->creacion = "NOW()";
		
	}
	public function getMaterias(){ return MateriasData::getById($this->id_materia);}
	public function getUser(){ return UserData::getById($this->id_usuario);}
	  public function getGrado(){ return GradosData::getById($this->id_grado);}
	  	public function getMateria(){ return AsignacionGBMPData::getById($this->id);}
	
	public function add(){
		$sql = "insert into ".self::$tablename." (nombre,id_usuario, id_grado) ";
		$sql .= "value (\"$this->nombre\", \"$this->id_usuario\",\"$this->id_grado\")";
		print_r($sql);
		return Executor::doit($sql);
	}


public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id and id_grado=$this->id_grado";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}

public static function getAllByGradoId($id_grado){
		$sql = "select * from ".self::$tablename." where id_grado=$id_grado";
		$query = Executor::doit($sql);
		return Model::many($query[0],new MateriasData());
	}

public static function getAllByTeamId($id){
		$sql = "select * from ".self::$tablename." where id_grado=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new MateriasData());
	}

		public static function getById($id_materia){
		$sql = "select * from ".self::$tablename." where id=$id_materia";
		$query = Executor::doit($sql);
		return Model::one($query[0],new MateriasData());
	}
	
	public function update(){
	    $sql = "update ".self::$tablename." set nombre=\"$this->nombre\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}	
	
		
public static function getAllByMateriaId($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new MateriasData());
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
	
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new MateriasData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LibrosData());

	}


}

?>