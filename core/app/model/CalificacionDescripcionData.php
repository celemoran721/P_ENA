<?php
class CalificacionDescripcionData {
	public static $tablename = "calificacion_descripcion";


	public function CalificacionDescripcionData(){
		$this->id = "";
		$this->nombre = "";
		$this->descripcion = "";
		$this->val = "";
		$this->f_entrega = "";
		$this->id_calname = "";
		$this->id_profesor = "";
		$this->created = "NOW()";

	}

public function getAlumn(){ return AlumnosData::getById($this->id_alumno); }


public function addCal(){
		$sql = "insert into ".self::$tablename." (nombre,descripcion,val,f_entrega,id_calname,id_profesor,created) ";
		$sql .= "value (\"$this->nombre\", \"$this->descripcion\", \"$this->val\", \"$this->f_entrega\",\"$this->id_calname\",
		\"$this->id_profesor\",$this->created)";
		//print_r($sql);
		return Executor::doit($sql);}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id order by nombre desc";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CalificacionDescripcionData());
	}

	public static function getAllCal(){
		$sql = "select * from ".self::$tablename." where id=0 or id=4  or id=5 or id= 6 or id=2 order by nombre asc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CalificacionDescripcionData());

	}

	
	public static function getAllProf($id_prof){
		 $sql = "select * from ".self::$tablename." where id=$id_profesor  ";
		$query = Executor::doit($sql);
	return Model::many($query[0],new CalificacionDescripcionData());}
	
	
	public static function getAllCountCal($id_prof){
		$sql = "select id as id, id_calname as mat, count(*) as  val from ".self::$tablename." 
		where  id_profesor=$id_prof group by id_calname";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new CalificacionDescripcionData();
			
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->mat = $r['mat'];
			$array[$cnt]->val = $r['val'];
			
			
			
			$cnt++;
		}
		return $array;
	}
	
}

?>