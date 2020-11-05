<?php
class PersonaData {
	public static $tablename = "persona";



	public function Personadata(){
		$this->id = "";
		$this->correo = "";
		$this->image = "";
		$this->nombres = "";
		$this->apellidos = "";
		$this->profesion = "";
		$this->fecha_nac = "";
		$this->edad = "";
		$this->direccion = "";
		$this->telefono_1 = "";
		$this->telefono_2 = "";
		$this->correo = "";
		$this->username = "";
		$this->password = "";
		$this->ref_nombre = "";
		$this->dpi = "";
		$this->ref_telefono = "";
		$this->ref_direccion = "";
		$this->ref_correo = "";
		$this->rol = "";
		$this->ref_parentesco = "";
		$this->id_padre = "";
	    $this->id_usuario = "";
		$this->id_rol = "";
		$this->creacion = "NOW()";
	}
	
	public function getRol(){ return RolesData::getById($this->id_rol);}
	

	
		public function addAl(){
		$sql = "insert into ".self::$tablename." (nombres, apellidos, codigo, fecha_nac, direccion, correo, username, 
		password, alergias, medicamento, ref_parentesco,rol,id_usuario, creacion) ";
		$sql .= "value (\"$this->nombres\", \"$this->apellidos\", \"$this->codigo\", \"$this->fecha_nac\",
		\"$this->direccion\", \"$this->correo\", \"$this->username\",\"$this->password\",
		\"$this->alergias\", \"$this->medicamento\",
		\"$this->ref_parentesco\",1,\"$this->id_usuario\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);}


    public function addPersonal(){
		$sql = "insert into ".self::$tablename." (nombres, apellidos,  dpi, profesion, fecha_nac, 
		direccion,telefono_1,correo, username, password, id_usuario, rol,  creacion) ";
		$sql .= "value (\"$this->nombres\", \"$this->apellidos\",  \"$this->dpi\",
		\"$this->profesion\", \"$this->fecha_nac\",\"$this->direccion\", 
		\"$this->telefono_1\", \"$this->correo\", \"$this->username\",\"$this->password\",
	    \"$this->id_usuario\",2,$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}

	
	public function addP(){
		$sql = "insert into ".self::$tablename." (nombres, apellidos,  dpi,  id_rol, profesion, fecha_nac, 
		direccion,telefono_1, telefono_2, correo, username, 
		password, ref_nombre, ref_telefono, ref_correo,  id_usuario, rol,  creacion) ";
		$sql .= "value (\"$this->nombres\", \"$this->apellidos\",  \"$this->dpi\",\"$this->id_rol\",
		\"$this->profesion\", \"$this->fecha_nac\",\"$this->direccion\", 
		\"$this->telefono_1\", \"$this->telefono_2\",\"$this->correo\", \"$this->username\",\"$this->password\",
		\"$this->ref_nombre\",
		\"$this->ref_telefono\",\"$this->ref_correo\", \"$this->id_usuario\",3,$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}
	
		
	public function addPadre(){
		$sql = "insert into ".self::$tablename." ( ref_nombre, dpi, ref_direccion, ref_telefono, ref_correo, rol,  id_usuario,creacion) ";
		$sql .= "value ( \"$this->ref_nombre\",\"$this->dpi\",\"$this->ref_direccion\",\"$this->ref_telefono\",\"$this->ref_correo\",
		4, \"$this->id_usuario\",$this->creacion)";
	//print_r($sql);
		return Executor::doit($sql);
	}
	
	
	public function addAlumno_with_image(){
		$sql = "insert into ".self::$tablename." (nombres, apellidos, image, codigo, fecha_nac,  direccion,correo, username, 
		password,alergias, medicamento, ref_parentesco,rol,id_usuario, creacion) ";
		$sql .= "value (\"$this->nombres\", \"$this->apellidos\", \"$this->image\",\"$this->codigo\", \"$this->fecha_nac\",
		\"$this->direccion\", \"$this->correo\", \"$this->username\",\"$this->password\",
		\"$this->alergias\", \"$this->medicamento\",
		\"$this->ref_parentesco\",1,\"$this->id_usuario\",$this->creacion)";
	//	print_r($sql);
		return Executor::doit($sql);}

	public function addPersonal_with_image(){
		$sql = "insert into ".self::$tablename." (nombres, apellidos, image, dpi, profesion, fecha_nac, 
		direccion,telefono_1, correo, username, password, 
		id_usuario, rol, creacion) ";
		$sql .= "value (\"$this->nombres\", \"$this->apellidos\", \"$this->image\", \"$this->dpi\",
		\"$this->profesion\", \"$this->fecha_nac\",\"$this->direccion\", 
		\"$this->telefono_1\",\"$this->correo\", \"$this->username\",\"$this->password\",
		\"$this->id_usuario\",2,$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}

	
	public function addP_with_image(){
		$sql = "insert into ".self::$tablename." (nombres, apellidos, image, dpi, id_rol, profesion, fecha_nac, 
		direccion,telefono_1, telefono_2, correo, username, 
		password, ref_nombre, ref_telefono, ref_correo,  id_usuario,  rol, creacion) ";
		$sql .= "value (\"$this->nombres\", \"$this->apellidos\", \"$this->image\", \"$this->dpi\",\"$this->id_rol\",
		\"$this->profesion\", \"$this->fecha_nac\",\"$this->direccion\", \"$this->telefono_1\", \"$this->telefono_2\",
		\"$this->correo\", \"$this->username\",\"$this->password\",\"$this->ref_nombre\",
		\"$this->ref_telefono\",\"$this->ref_correo\",\"$this->id_usuario\",3,$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}
	

	public function addPadre_with_image(){
		$sql = "insert into ".self::$tablename." ( ref_nombre, image, dpi, ref_direccion, ref_telefono, ref_correo, 
		rol, id_usuario,creacion) ";
		$sql .= "value ( \"$this->ref_nombre\", \"$this->image\",\"$this->dpi\",
		\"$this->ref_direccion\",\"$this->ref_telefono\",\"$this->ref_correo\",
		4, \"$this->id_usuario\",$this->creacion)";
		//print_r($sql);
		return Executor::doit($sql);
	}


	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto PersonaData previamente utilizamos el contexto
	public function updateU(){
		$sql = "update ".self::$tablename." set nombres=\"$this->nombres\",correo=\"$this->correo\",username=\"$this->username\",
		apellidos=\"$this->apellidos\",is_active=\"$this->is_active\",rol=\"$this->rol\" where id=$this->id";
		Executor::doit($sql);
	}
	
		
	public function updateAl(){
	   $sql = "update ".self::$tablename." set nombres=\"$this->nombres\", apellidos=\"$this->apellidos\", 
 	   direccion=\"$this->direccion\", codigo=\"$this->codigo\",correo=\"$this->correo\",  
		alergias=\"$this->alergias\", medicamento=\"$this->medicamento\", 
		fecha_nac=\"$this->fecha_nac\", id_usuario=\"$this->id_usuario\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}	
	
	public function updateAlumno_with_image(){
	    $sql = "update ".self::$tablename." set nombres=\"$this->nombres\", apellidos=\"$this->apellidos\", image=\"$this->image\",
		direccion=\"$this->direccion\", codigo=\"$this->codigo\",correo=\"$this->correo\",  
		alergias=\"$this->alergias\", medicamento=\"$this->medicamento\", 
		fecha_nac=\"$this->fecha_nac\", id_usuario=\"$this->id_usuario\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}	
	
	public function updateP(){
	    $sql = "update ".self::$tablename." set nombres=\"$this->nombres\", apellidos=\"$this->apellidos\", dpi=\"$this->dpi\", 
		 direccion=\"$this->direccion\", telefono_1=\"$this->telefono_1\", telefono_2=\"$this->telefono_2\", correo=\"$this->correo\",
		username=\"$this->username\", password=\"$this->password\",
		ref_nombre=\"$this->ref_nombre\", ref_correo=\"$this->ref_correo\", 
		fecha_nac=\"$this->fecha_nac\", id_usuario=\"$this->id_usuario\" where id=$this->id";
	//print_r($sql);
		Executor::doit($sql);
	}	
	
	public function updateP_with_image(){
	    $sql = "update ".self::$tablename." set nombres=\"$this->nombres\", apellidos=\"$this->apellidos\", dpi=\"$this->dpi\", 
		image=\"$this->image\",profesion=\"$this->profesion\", direccion=\"$this->direccion\", 
		telefono_1=\"$this->telefono_1\", telefono_2=\"$this->telefono_2\", correo=\"$this->correo\",
		username=\"$this->username\", password=\"$this->password\",
		ref_nombre=\"$this->ref_nombre\", ref_correo=\"$this->ref_correo\", ref_telefono=\"$this->ref_telefono\", 
		fecha_nac=\"$this->fecha_nac\", id_usuario=\"$this->id_usuario\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}	
	
	public function updatePersonal(){
	    $sql = "update ".self::$tablename." set nombres=\"$this->nombres\", apellidos=\"$this->apellidos\", dpi=\"$this->dpi\", profesion=\"$this->profesion\", 
		 direccion=\"$this->direccion\", telefono_1=\"$this->telefono_1\",  correo=\"$this->correo\",
		 id_usuario=\"$this->id_usuario\" where id=$this->id";
	//print_r($sql);
		Executor::doit($sql);
	}	
	
		public function updatePersonal_with_image(){
	    $sql = "update ".self::$tablename." set nombres=\"$this->nombres\", apellidos=\"$this->apellidos\", dpi=\"$this->dpi\", profesion=\"$this->profesion\", 
		 image=\"$this->image\",direccion=\"$this->direccion\", telefono_1=\"$this->telefono_1\",  correo=\"$this->correo\",
		 id_usuario=\"$this->id_usuario\" where id=$this->id";
	//print_r($sql);
		Executor::doit($sql);
	}	

	public function updatePadre(){
	    $sql = "update ".self::$tablename." set ref_nombre=\"$this->ref_nombre\",  dpi=\"$this->dpi\", 
		 ref_direccion=\"$this->ref_direccion\", 
		ref_telefono=\"$this->ref_telefono\",ref_correo=\"$this->ref_correo\", id_usuario=\"$this->id_usuario\" where id=$this->id";
	//print_r($sql);
		Executor::doit($sql);
	}	
	
	
	public function updatePadre_with_image(){
	    $sql = "update ".self::$tablename." set ref_nombre=\"$this->ref_nombre\",  dpi=\"$this->dpi\", 
		 ref_direccion=\"$this->ref_direccion\", image=\"$this->image\",
		ref_telefono=\"$this->ref_telefono\",ref_correo=\"$this->ref_correo\", id_usuario=\"$this->id_usuario\" where id=$this->id";
	//print_r($sql);
		Executor::doit($sql);
	}	

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		
		return Model::one($query[0],new PersonaData());

	}
	
	public static function getAllBy($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		
		return Model::many($query[0],new PersonaData());

	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where correo=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PersonaData());

	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new PersonaData());
	}
	
	public static function getAllAlumno(){
		$val=(1);	
		$sql = "select * from ".self::$tablename." where rol=\"$val\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PersonaData());
	}
	
		public static function getAllProf(){
		$val=(3);	
		$sql = "select * from ".self::$tablename." where rol=\"$val\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PersonaData());
	}
	
	public static function getAllPer(){
		$val=(2);	
		$sql = "select * from ".self::$tablename." where rol=\"$val\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PersonaData());
	}
	
	
	public static function getAllPadre(){
		$val=(4);	
		$sql = "select * from ".self::$tablename." where rol=\"$val\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PersonaData());
	}



	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombres like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PersonaData());

	}


}

?>