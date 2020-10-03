<?php

if(count($_POST)>0){
	//$mat=$_POST["id_mat"];
	$tar = new TareaData();
	//$materia->id_grado = $_POST["id_grado"];
	$tar->nombre = $_POST["nombre"];
	$tar->descripcion = $_POST["descripcion"];
	$tar->valor = $_POST["valor"];
	$tar->f_entrega = $_POST["f_entrega"];
	$tar->persona_id = $_SESSION["persona_id"];
	

	$a=$tar->addtar();
	
	
	
	$at = new AsignacionTareaData();
	$at->id_tarea = $a[1];
	$at->id_materia = $_POST["id_mat"];
	$at->id_bimestre = $_SESSION['bimestre_id'];
	$at->persona_id = $_SESSION["persona_id"];
	$at->addtar();
	
print "<script>window.location='index.php?view=home';</script>";


}


?>