<?php

$anuncio = AnuncioData::getById($_GET["id"]);
foreach($anuncio as $an){
$a=$an->delById($_GET["id"]);}


  $at = AsignacionAnuncioData::getById($_GET["id"]);
foreach($at as $ant){
$ant->delById($_GET["id"]);}
	
print "<script>window.location='index.php?view=home';</script>";


?>