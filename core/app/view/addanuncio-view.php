<?php

if(count($_POST)>0){
	//$mat=$_POST["id_mat"];
	$anuncio = new AnuncioData();
	//$materia->id_grado = $_POST["id_grado"];
	$anuncio->titulo = $_POST["titulo"];
	$anuncio->descripcion = $_POST["descripcion"];
	$anuncio->persona_id = $_SESSION["persona_id"];
	

	$a=$anuncio->addanuncio();
	
	
	
	$at = new AsignacionAnuncioData();
	$at->id_anuncio = $a[1];
	$at->id_materia = $_POST["id_mat"];
	$at->id_bimestre = $_SESSION['bimestre_id'];
	$at->persona_id = $_SESSION["persona_id"];
	$at->addan();
	
print "<script>window.location='index.php?view=home';</script>";


}


?>