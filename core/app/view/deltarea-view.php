<?php

$tarea = TareaData::getById($_GET["id"]);
foreach($tarea as $ta){
$a=$ta->delById($_GET["id"]);}


$at = AsignacionTareaData::getById($_GET["id"]);
foreach($at as $ant){
$ant->delById($_GET["id"]);}
	
print "<script>window.location='index.php?view=home';</script>";


?>