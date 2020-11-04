<?php

if(count($_POST)>0){
	$asig = AsignacionBGMPData::getAllBy($_POST["id_asig"]);
	$asig->id_grado = $_POST["id_grado"];
	$asig->id_profesor = $_POST["id_profesor"];
	$asig->nombre = $_POST["nombre"];
	
	$asig->update();




//print "<script>window.location='index.php?view=materias';</script>";


}


?>