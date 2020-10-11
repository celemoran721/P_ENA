<?php

$anuncio = MaterialData::getById($_GET["id"]);
foreach($anuncio as $an){
$an->delById($_GET["id"]);}


  $at = AsignacionMaterialData::getById($_GET["id"]);
foreach($at as $ant){
$ant->delById($_GET["id"]);}
	
print "<script>window.location='index.php?view=home';</script>";


?>