<?php

if(count($_POST)>0){
	$alumno = AlumnosData::getById($_POST["id_alumno"]);
	$alumno = new AlumnosData();
	$alumno->nombres = $_POST["nombres"];
	$alumno->apellidos = $_POST["apellidos"];
	$alumno->fecha_nac = $_POST["sd"];
	$alumno->edad = $_POST["edad"];
	$alumno->direccion = $_POST["direccion"];
	$alumno->codigo= $_POST["codigo"];
	$alumno->alergias = $_POST["alergias"];
	$alumno->medicamento = $_POST["medicamento"];
	$alumno->enc_nombre = $_POST["enc_nombre"];
	$alumno->enc_direccion = $_POST["enc_direccion"];
	$alumno->enc_parentesco = $_POST["enc_parentesco"];
	$alumno->enc_dpi = $_POST["enc_dpi"];
	$alumno->enc_telefono = $_POST["enc_telefono"];
	$alumno->enc_correo = $_POST["enc_correo"];
	$alumno->user_id = $_SESSION["user_id"];
	$alumno->update();
	
	


print "<script>window.location='index.php?view=alumnos';</script>";


}


?>