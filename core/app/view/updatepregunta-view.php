<?php

if(count($_POST)>0){
	//$mat=$_POST["id_mat"];
	$pregunta = PreguntasData::getById($_POST["id_pre"]);
	foreach($pregunta as $pre){
	//$materia->id_grado = $_POST["id_grado"];
	$pre->pregunta = $_POST["pregunta"];
	$pre->r_1 = $_POST["r_1"];
	$pre->r_2 = $_POST["r_2"];
	$pre->r_3 = $_POST["r_3"];
	$pre->r_4 = $_POST["r_4"];
	$pre->r_5 = $_POST["r_5"];
	$pre->valor = $_POST["valor"];
	$pre->correcta = $_POST["correcta"];
	
	$pre->persona_id = $_SESSION["persona_id"];
	

	$pre->update();
	
	$p = AsignacionPreguntasData::getByIdPre($pre->id); 
	
	print "<script>window.location='index.php?view=preguntas&id=$p->id_examen';</script>";	}


}


?>