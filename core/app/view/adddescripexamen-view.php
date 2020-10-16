<?php

if(count($_POST)>0){
	//$mat=$_POST["id_mat"];
	$tar = new ExamenData();
	//$materia->id_grado = $_POST["id_grado"];
	$tar->nombre = $_POST["nombre"];
	$tar->descripcion = $_POST["descripcion"];
	$tar->valor = $_POST["valor"];
	$tar->tiempo = $_POST["tiempo"];
	$tar->c_preguntas = $_POST["c_preguntas"];
	$tar->f_entrega = $_POST["f_entrega"];
	$tar->persona_id = $_SESSION["persona_id"];
	

	$a=$tar->addex();
	
	
	
	$at = new AsignacionExamenData();
	$at->id_examen = $a[1];
	$at->id_materia = $_POST["id_mat"];
	$at->id_bimestre = $_SESSION['bimestre_id'];
	$at->persona_id = $_SESSION["persona_id"];
	$at->addex();
	
print "<script>window.location='index.php?view=home';</script>";


}


?>