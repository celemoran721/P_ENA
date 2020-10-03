<?php

if(count($_POST)>0){
	$anuncio = AnuncioData::getById($_POST["id_anuncio"]);
	foreach($anuncio as $an){
	$an->titulo = $_POST["titulo"];
	$an->descripcion = $_POST["descripcion"];
	$an->persona_id = $_SESSION["persona_id"];
	$an->updateA();}
	
	


print "<script>window.location='index.php?view=home';</script>";


}


?>