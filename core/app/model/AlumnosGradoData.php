<?php
class AlumnosGradoData {
	public static $tablename = "asignacion_alumno";

	public function AlumnosGradoData(){
     	$this->id = "";
	 //   $this->nombres = "";
		$this->id_grado = "";
		$this->id_alumno = "";
		$this->id_padre = "";
	    $this->id_usuario = "";
		$this->val = "";
		$this->creacion = "NOW()";
		
	}
	public function getAlumn(){ return PersonaData::getById($this->id_alumno); }
	public function getAlumnos(){ return PersonaData::getAllBy($this->id_alumno); }
	public function getPadre(){ return PersonaData::getById($this->id_padre); }
	public function getGrado(){ return GradosData::getById($this->id_grado); }
	public function getUser(){ return UserData::getById($this->user_id);}
	
	
	public function add(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_grado,id_padre,id_usuario,creacion) ";
		$sql .= "value (\"$this->id_alumno\",\"$this->id_grado\",\"$this->id_padre\",\"$this->id_usuario\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}

public function delalumno(){
		$sql = "delete from ".self::$tablename." where id_alumno=$this->id_alumno and id_grado=$this->id_grado";
		Executor::doit($sql);
	}
	
	

	
public function update(){
	  $sql = "update ".self::$tablename." set  id_padre=\"$this->id_padre\", 
		id_usuario=\"$this->id_usuario\" where id_alumno=$this->id";
		//print_r($sql);
	Executor::doit($sql);
	}	
	
	
	
		

	public static function getById($ida,$idp){
		 $sql = "select *from ".self::$tablename." where id_alumno=$ida and id_padre=$idp";
		$query = Executor::doit($sql);
		print_r($sql);
		return Model::many($query[0],new AlumnosGradoData());
	}
	
	public static function getAllByCount($id){
		 $sql = "select COUNT(*) as val from ".self::$tablename." where id_grado=$id";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new AlumnosGradoData();
			
			$array[$cnt]->val = $r['val'];
			
			$cnt++;
		}
		return $array;
	}
		
		//return Model::one($query[0],new AlumnosGradoData());
	//}
	
		
		

	public static function getAllByDate($start,$end){
  $sql = "select * from ".self::$tablename." where date(anio_edicion) >= \"$start\" and date(anio_edicion) <= \"$end\"  order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LibrosData());

	}
	

	
	public static function getAllByTeamId($id){
		$sql = "select * from ".self::$tablename." where id_grado=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AlumnosGradoData());
	}
	

	
		public static function getAllByAlumnId($id){
		$sql = "select * from ".self::$tablename." where id_alumno=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AlumnosGradoData());
	}
	
	public static function getAllByOneAlumnId($id){
		$sql = "select * from ".self::$tablename." where id_alumno=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new AlumnosGradoData());
	}
	
	
	public static function getAllByGradoId($id){
		$sql = "select * from ".self::$tablename." where id_grado=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AlumnosGradoData());
	}
	
	
	
	
	
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new AlumnosGradoData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombres like '%$q%'";
		$query = Executor::doit($sql);
		//
		return Model::many($query[0],new ProfesoresData());
        
	}


}

?>