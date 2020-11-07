<?php

if(isset($_POST["id_entrega"])){
//print_r($_POST["id_entrega"]);
	$tarea = new NotaTareaData();
	$tarea->comentario = $_POST["comentario"];
	$tarea->nota = $_POST["nota"];
	
	//$tarea->nota = $_POST["nota"];
	$tarea->entrega_id = $_POST["id_entrega"];
	$tarea->persona_id = $_SESSION["persona_id"];
	$a=$tarea->addnota();
	
	$mat = EntregaTareaData::getByIdO($tarea->entrega_id);
	print "<script>window.location='index.php?view=tareas_nota_agg&id_asigta=$mat->id_tarea';</script>";

}else{
	$tarea = new NotaTareaData();
	$tarea->comentario = $_POST["comentario"];
	$tarea->nota = $_POST["nota"];	
	$tarea->id_alumno = $_POST["id_no"];
	$tarea->id_tarea=  $_SESSION['examen'];
	$tarea->persona_id = $_SESSION["persona_id"];
	$a=$tarea->addnotaN();
$verifica = NotaTareaData::getAllByNotaNo($_SESSION['examen'],$_POST["id_no"]);
		print "<script>window.location='index.php?view=tareas_nota_agg&id_asigta=$verifica->id_tarea';</script>";	
		
	
 }
 

?>