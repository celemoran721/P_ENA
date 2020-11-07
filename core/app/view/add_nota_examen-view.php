<?php

if(isset($_POST["id_entrega"])){

	$examen = new NotaExamenData();
	$examen->comentario = $_POST["comentario"];
	$examen->nota = $_POST["nota"];
	//$examen->nota = $_POST["nota"];
	$examen->entrega_id = $_POST["id_entrega"];
	$examen->persona_id = $_SESSION["persona_id"];
	$a=$examen->addnota();

$mat = EntregaExamenData::getByIdO($examen->entrega_id);
		print "<script>window.location='index.php?view=examenes_nota_agg&id_asigta=$mat->id_examen';</script>";	
		
}else{
	$examen = new NotaExamenData();
	$examen->comentario = $_POST["comentario"];
	$examen->nota = $_POST["nota"];
	$examen->id_alumno = $_POST["id_no"];
	$examen->id_tarea=  $_SESSION['examen'];	
	$examen->persona_id = $_SESSION["persona_id"];
	$a=$examen->addnotaN();
	
	$verifica = NotaExamenData::getAllByNotaNo($_SESSION['examen'],$_POST["id_no"]);
		print "<script>window.location='index.php?view=examenes_nota_agg&id_asigta=$verifica->id_tarea';</script>";	
	
 }
 

?>