<?php

if(count($_POST)>0){
	$alumno = new PersonaData();
	$alumno->nombres = $_POST["nombres"];
	$alumno->apellidos = $_POST["apellidos"];
	$alumno->fecha_nac = $_POST["sd"];
	$alumno->direccion = $_POST["direccion"];
    $alumno->correo = $_POST["correo"];
	$alumno->username = $_POST["username"];
	$alumno->password = sha1(md5($_POST["password"]));
	$alumno->codigo= $_POST["codigo"];
	$alumno->alergias = $_POST["alergias"];
	$alumno->medicamento = $_POST["medicamento"];
	//$alumno->id_padre = $_POST["id_padre"];
	$alumno->ref_parentesco = $_POST["ref_parentesco"];

	$alumno->id_usuario = $_SESSION["persona_id"];
	
	if(isset($_FILES["image"])){
		  
		$image = new Upload($_FILES["image"]);
	 
			if($image->uploaded){
				$image->Process("storage/alumno/");
					if($image->processed){
						$alumno->image = $image->file_dst_name;
						$a= $alumno->addAlumno_with_image();
		
		
						$at = new AlumnosGradoData();
						$at->id_alumno = $a[1];
						$at->id_grado = $_POST["id_grado"];
						$at->id_padre = $_POST["id_padre"];
						$at->id_usuario = $_SESSION["persona_id"];
						$at->add();
					}
					}else{

			$a= $alumno->addAl();
			$at = new AlumnosGradoData();
			$at->id_alumno = $a[1];
			$at->id_grado = $_POST["id_grado"];
			$at->id_padre = $_POST["id_padre"];
			$at->id_usuario = $_SESSION["persona_id"];
			$at->add();
  
    }
  }
	
	
print "<script>window.location='index.php?view=viewgrado_crear_alumno&id=$_POST[id_grado]';</script>";

//print_r(add());

}


?>
