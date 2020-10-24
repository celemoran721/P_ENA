<?php

if(count($_POST)>0){
	$anuncio = AnuncioData::getById($_POST["id_anuncio"]);
	foreach($anuncio as $an){
	$an->titulo = $_POST["titulo"];
	$an->descripcion = $_POST["descripcion"];
	$an->persona_id = $_SESSION["persona_id"];
	$an->updateA();}
	
	$mat = AsignacionAnuncioData::getByIdO($_POST["id_anuncio"]);
	

	print "<script>window.location='index.php?view=anuncios&id_mat=$mat->id_materia';</script>";
//print "<script>window.location='index.php?view=home';</script>";


}


?>