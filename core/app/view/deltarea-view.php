<?php

$tarea = TareaData::getById($_GET["id"]);
foreach($tarea as $ta){
$a=$ta->delById($_GET["id"]);}


$at = AsignacionTareaData::getById($_GET["id"]);
//foreach($at as $ant){
$at->delByIdTa($at->id_tarea);
	
//print "<script>window.location='index.php?view=home';</script>";


?>