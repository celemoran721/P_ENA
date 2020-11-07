<?php

$pre = AsignacionPreguntasData::getByIdPre($_GET["id"]);

	$pre->delByIdP($_GET["id"]);


$p = PreguntasData::getByIdOne($_GET["id"]);
$p->delById($_GET["id"]);
//print "<script>window.location='index.php?view=viewgrado_crear_alumno&id=$_POST[id_grado]';</script>";

print "<script>window.location='index.php?view=preguntas&id=$pre->id_examen';</script>";	
?>