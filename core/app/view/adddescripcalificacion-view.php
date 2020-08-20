<?php

if(count($_POST)>0){
	$cal = new CalificacionDescripcionData();
	//$materia->id_grado = $_POST["id_grado"];
	$cal->nombre = $_POST["nombre"];
	$cal->descripcion = $_POST["descripcion"];
	$cal->val = $_POST["val"];
	$cal->f_entrega = $_POST["sd"];
	$cal->id_profesor = $_SESSION["persona_id"];
	

	$a=$cal->addCal();
	
	
	
	$at = new AsignacionBGMPData();
	$at->id_cal = $a[1];
	$at->id_bimestre = $_SESSION['bimestre_id'];
	$at->id_profesor = $_SESSION["persona_id"];
	$at->user_id = $_SESSION["persona_id"];
	$at->id_materia = $_SESSION['materia_id'];
	$at->id_calname = $_SESSION['calificacion_id'];
	//$at->id_materia = $_SESSION["persona_id"];
	$at->addCal();
	
print "<script>window.location='index.php?view=view_calificaciones_list';</script>";


}


?>