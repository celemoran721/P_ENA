<?php

if(count($_POST)>0){
	$tarea = TareaData::getById($_POST["id_tarea"]);
	foreach($tarea as $an){
	$an->nombre = $_POST["nombre"];
	$an->descripcion = $_POST["descripcion"];
	$an->valor = $_POST["valor"];
	$an->f_entrega = $_POST["sd"];
	$an->persona_id = $_SESSION["persona_id"];
	$an->updateT();}
	
	


print "<script>window.location='index.php?view=home';</script>";


}


?>