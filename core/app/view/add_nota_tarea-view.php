<?php

if(count($_POST)>0){

	$tarea = new NotaTareaData();
	$tarea->comentario = $_POST["comentario"];
	$tarea->nota = $_POST["nota"];
	//$tarea->nota = $_POST["nota"];
	$tarea->entrega_id = $_POST["id_entrega"];
	$tarea->persona_id = $_SESSION["persona_id"];
	$a=$tarea->addnota();



$mat = EntregaTareaData::getByIdO($tarea->entrega_id);
		print "<script>window.location='index.php?view=tareas_nota_agg&id_asigta=$mat->id_tarea';</script>";	
		
	
 }
 

?>