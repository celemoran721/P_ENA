<?php
class AnuncioMateriaData {
	public static $tablename = "asignacion_anuncios";

	public function AnuncioMateriaData(){
     	$this->id = "";
	 //   $this->nombres = "";
		$this->id_anuncio = "";
		$this->id_materia = "";
		$this->id_bimestre = "";
	    $this->persona_id = "";
		$this->creacion = "NOW()";
		
	}
	public function getAnuncio(){ return AnuncioData::getById($this->id_anuncio); }
	public function getMateria(){ return MateriasData::getById($this->id_materia); }
	
	
	public function getUser(){ return UserData::getById($this->user_id);}
	
	
	public function addan(){
		$sql = "insert into ".self::$tablename." (id_anuncio,id_materia,id_bimestre,persona_id,creacion) ";
		$sql .= "value (\"$this->id_anuncio\",\"$this->id_materia\",\"$this->id_bimestre\",\"$this->persona_id\",$this->creacion)";
	//	print_r($sql);
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id_anuncio=$id";
		Executor::doit($sql);
	}

	
	

	
public function update(){
	  $sql = "update ".self::$tablename." set  id_padre=\"$this->id_padre\", 
		persona_id=\"$this->persona_id\" where id_alumno=$this->id";
		//print_r($sql);
	Executor::doit($sql);
	}	
	
	
	
		

	public static function getByIdMat($idmat){
		 $sql = "select *from ".self::$tablename." where id_materia=$idmat";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AnuncioMateriaData());
	}
	
	public static function getAllByCount($id){
		 $sql = "select COUNT(*) as val from ".self::$tablename." where id_grado=$id";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new AnuncioMateriaData();
			
			$array[$cnt]->val = $r['val'];
			
			$cnt++;
		}
		return $array;
	}

	
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new AnuncioMateriaData());
	}


	
	public static function getById($id){
		 $sql = "select *from ".self::$tablename." where id_anuncio=$id";
		$query = Executor::doit($sql);
		//print_r($sql);
		return Model::many($query[0],new AnuncioMateriaData());
	}
	
	
	
	public static function getAllCountMat($id,$bim){
		$sql = "select id_materia as mat, id_anuncio as cat, count(id_anuncio) as  val from ".self::$tablename." 
		where   id_materia=$id and id_bimestre=$bim group by id_materia";
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