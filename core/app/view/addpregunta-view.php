<?php

if(count($_POST)>0){
	//$mat=$_POST["id_mat"];
	$exa = new PreguntasData();
	//$materia->id_grado = $_POST["id_grado"];
	$exa->pregunta = $_POST["pregunta"];
	$exa->r_1 = $_POST["r_1"];
	$exa->r_2 = $_POST["r_2"];
	$exa->r_3 = $_POST["r_3"];
	$exa->r_4 = $_POST["r_4"];
	$exa->r_5 = $_POST["r_5"];
	$exa->valor = $_POST["valor"];
	$exa->correcta = $_POST["correcta"];
	
	$exa->persona_id = $_SESSION["persona_id"];
	

	$a=$exa->addexa();
	
	
	
	$at = new AsignacionPreguntasData();
	$at->id_pregunta = $a[1];
	$at->id_examen = $_POST["id_ex"];
	$at->id_bimestre = $_SESSION['bimestre_id'];
	$at->persona_id = $_SESSION["persona_id"];
	$at->addexa();
	
//print "<script>window.location='index.php?view=home';</script>";


}


?>