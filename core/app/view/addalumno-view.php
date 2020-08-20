<?php

if(count($_POST)>0){
	$alumno = new PersonaData();
	$alumno->nombres = $_POST["nombres"];
	$alumno->apellidos = $_POST["apellidos"];
	$alumno->fecha_nac = $_POST["sd"];
	$alumno->edad = $_POST["edad"];
	$alumno->direccion = $_POST["direccion"];
	$alumno->codigo= $_POST["codigo"];
	$alumno->alergias = $_POST["alergias"];
	$alumno->medicamento = $_POST["medicamento"];
	//$alumno->id_padre = $_POST["id_padre"];
	$alumno->ref_parentesco = $_POST["ref_parentesco"];

	$alumno->user_id = $_SESSION["persona_id"];
	
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
						$at->user_id = $_SESSION["persona_id"];
						$at->add();
					}
					}else{

			$a= $alumno->addAl();
			$at = new AlumnosGradoData();
			$at->id_alumno = $a[1];
			$at->id_grado = $_POST["id_grado"];
			$at->id_padre = $_POST["id_padre"];
			$at->user_id = $_SESSION["persona_id"];
			$at->add();
  
    }
  }
	
	
print "<script>window.location='index.php?view=viewgrado&id=$_POST[id_grado]';</script>";

//print_r(add());

}


?>
