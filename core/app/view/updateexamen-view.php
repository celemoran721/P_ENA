<?php

if(count($_POST)>0){
	$Examen = ExamenData::getById($_POST["id_examen"]);
	foreach($Examen as $an){
	$an->nombre = $_POST["nombre"];
	$an->descripcion = $_POST["descripcion"];
	$an->valor = $_POST["valor"];
	$an->tiempo = $_POST["tiempo"];
	$an->c_preguntas = $_POST["c_preguntas"];
	$an->f_entrega = $_POST["sd"];
	$an->persona_id = $_SESSION["persona_id"];
	$an->updateEx();}
	
	$asig = AsignacionExamenData::getById($_POST["id_examen"]);
	//foreach($asig as $as){
    $asig->estado = isset($_POST["estado"])?1:0;
	$asig->persona_id = $_SESSION["persona_id"];
	$asig->updateEx();

print "<script>window.location='index.php?view=home';</script>";


}


?>