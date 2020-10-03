<?php

if(count($_POST)>0){
	$grado = GradosData::getById($_POST["id_grado"]);
	$grado->nombre = $_POST["nombre"];
	$grado->id_etapa = $_POST["id_etapa"];
	$grado->user_id = $_SESSION["persona_id"];
	$grado->update();
	
	


print "<script>window.location='index.php?view=grados_add_alumno';</script>";


}


?>