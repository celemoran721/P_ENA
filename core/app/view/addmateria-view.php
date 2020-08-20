<?php

if(count($_POST)>0){
	$materia = new MateriasData();
	//$materia->id_grado = $_POST["id_grado"];
	$materia->id_grado = $_POST["id_grado"];
	$materia->nombre = $_POST["nombre"];
	$materia->id_usuario = $_SESSION["persona_id"];
	$a=$materia->add();
	
	
	
	$at = new AsignacionBGMPData();
	$at->id_materia = $a[1];
	$at->id_grado = $_POST["id_grado"];
	$at->id_profesor = $_POST["id_profesor"];
	$at->id_usuario = $_SESSION["persona_id"];
	$at->add();
	
print "<script>window.location='index.php?view=materias';</script>";


}


?>