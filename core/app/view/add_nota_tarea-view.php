<?php

if(count($_POST)>0){

	$tarea = new NotaTareaData();
	$tarea->comentario = $_POST["comentario"];
	$tarea->nota = $_POST["nota"];
	//$tarea->nota = $_POST["nota"];
	$tarea->entrega_id = $_POST["id_grado"];
	$tarea->persona_id = $_SESSION["persona_id"];
	$a=$tarea->addnota();

		

							} 

?>