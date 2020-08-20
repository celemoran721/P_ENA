<?php
class CalificacionesData {
	public static $tablename = "calificacion";


	public function CalificacionesData(){
		$this->id = "";
		$this->parcial1 = "";
		$this->parcial2 = "";
		$this->e_final = "";
		$this->tarea1 = "";
		$this->tarea2 = "";
		$this->tarea3 = "";
		$this->tarea4 = "";
		$this->tarea5 = "";
		$this->ej1 = "";
		$this->ej2 = "";
		$this->ej3 = "";
		$this->ej4 = "";
		$this->ej5 = "";
		$this->comportamiento = "";
		$this->asistencia = "";
		$this->id_usuario = "";
		$this->id_asignacion_alumno = "";
		$this->id_materia = "";
		$this->id_profesor = "";
		$this->val = "";
		
		
		$this->created_at = "NOW()";
	}

public function getAlumn(){ return AlumnosData::getById($this->id_alumno); }
public function getMateria(){ return MateriasData::getById($this->id_materia);}

	public function addt1(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,tarea1) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->tarea1\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
public function addt2(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,tarea2) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->tarea2\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
	public function addt3(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,tarea3) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->tarea3\")";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public function addt4(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,tarea4) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->tarea4\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
		public function addt5(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,tarea5) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->tarea5\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
	public function addej1(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,ej1) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->ej1\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
public function addej2(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,ej2) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->ej2\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
	public function addej3(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,ej3) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->ej3\")";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public function addej4(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,ej4) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->ej4\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
		public function addej5(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,ej5) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->ej5\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
	public function addp1(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,parcial1) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->parcial1\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
	public function addp2(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,parcial2) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->parcial2\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
		public function addf(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,e_final) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->e_final\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
	public function addcom(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,comportamiento) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->comportamiento\")";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
		public function addass(){
		$sql = "insert into ".self::$tablename." (id_alumno,id_materia,asistencia) ";
		$sql .= "value ($this->id_alumno,$this->id_materia,\"$this->asistencia\")";
		//print_r($sql);
		return Executor::doit($sql);
	}

public function updatet1(){
		$sql = "update ".self::$tablename." set tarea1=\"$this->tarea1\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	public function updatet2(){
		$sql = "update ".self::$tablename." set tarea2=\"$this->tarea2\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
		public function updatet3(){
		$sql = "update ".self::$tablename." set tarea3=\"$this->tarea3\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
		public function updatet4(){
		$sql = "update ".self::$tablename." set tarea4=\"$this->tarea4\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
			public function updatet5(){
		$sql = "update ".self::$tablename." set tarea5=\"$this->tarea5\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
	
	public function updateej1(){
		$sql = "update ".self::$tablename." set ej1=\"$this->ej1\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	public function updateej2(){
		$sql = "update ".self::$tablename." set ej2=\"$this->ej2\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
		public function updateej3(){
		$sql = "update ".self::$tablename." set ej3=\"$this->ej3\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
		public function updateej4(){
		$sql = "update ".self::$tablename." set ej4=\"$this->ej4\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
			public function updateej5(){
		$sql = "update ".self::$tablename." set ej5=\"$this->ej5\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
	public function updatep1(){
		$sql = "update ".self::$tablename." set parcial1=\"$this->parcial1\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}

public function updatep2(){
		$sql = "update ".self::$tablename." set parcial2=\"$this->parcial2\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
	public function updatef(){
		$sql = "update ".self::$tablename." set e_final=\"$this->e_final\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
		public function updatecom(){
		$sql = "update ".self::$tablename." set comportamiento=\"$this->comportamiento\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}

		public function updateass(){
		$sql = "update ".self::$tablename." set asistencia=\"$this->asistencia\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}


	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto CalificationData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set tarea1=\"$this->tarea1\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
	public function updatet(){
		$sql = "update ".self::$tablename." set tarea2=\"$this->tarea2\" where id=$this->id";
		print_r($sql);
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CalificationData());
	}

	public static function getByBA($materia,$alumn){
		$sql = "select * from ".self::$tablename." where  id_materia=$materia and id_alumno=$alumn";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new CalificacionesData());
	}
	
	public static function getProm2($materia,$alumn){
		$sql = "select (ej1+ej2+ej3+ej4+ej5+parcial1+parcial2+e_final+tarea1+tarea2+tarea3+tarea4+tarea5+comportamiento+asistencia) 
		as val from ".self::$tablename." where  id_materia=$materia and id_alumno=$alumn";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::one($query[0],new CalificacionesData());
	}
	

		//print_r($sql);
		//return Model::one($query[0],new CalificacionesData());
	//}
		public static function getProm($materia,$alumn){
		$sql = "select (ej1+ej2+ej3+ej4+ej5+parcial1+parcial2+e_final+tarea1+tarea2+tarea3+tarea4+tarea5+comportamiento+asistencia) 
		as val from ".self::$tablename." where  id_materia=$materia and id_alumno=$alumn";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new CalificacionesData();
			
			$array[$cnt]->val = $r['val'];
			
			$cnt++;
		}
		return $array;
	}
	
	public static function getEstado($materia,$alumn){
		
		//select  sum(ej1+ej2+ej3+ej4+ej5+parcial1+parcial2+e_final+tarea1+tarea2+tarea3+tarea4+tarea5+comportamiento+asistencia)as val,if(val>=60,'APROBADO','REPROBADO') 
		// as id_profesor from calificacion where  id_materia=20 and id_alumno=18
		$nota=(60);
		$sql = "select  sum(ej1+ej2+ej3+ej4+ej5+parcial1+parcial2+e_final+tarea1+tarea2+tarea3+tarea4+tarea5+comportamiento+asistencia)as val,
		if(val>=$nota,'APROBADO','REPROBADO') 
		 as id_profesor from ".self::$tablename." where  id_materia=$materia and id_alumno=$alumn";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new CalificacionesData();
			
			$array[$cnt]->id_profesor = $r['id_profesor'];
			
			$cnt++;
		}
		return $array;
	}
	
	
	public static function getAllByMateriaId($id){
		$sql = "select * from ".self::$tablename." where id_materia=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CalificacionesData());
	}
			
	
public static function getAllByMatId($id){
		$sql = "select * from ".self::$tablename." where id_materia=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CalificacionesData());
	}
	
	public static function getAllByAlumnId($id){
		$sql = "select * from ".self::$tablename." where id_alumno=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CalificacionesData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new CalificationData());

	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CalificationData());
	}


}

?>