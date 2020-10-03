<?php

$grupos = AlumnosGradoData::getAllByAlumnId($_GET["id"]);
foreach ($grupos as $t) {
	$t->delalumno();
}

$alumno = PersonaData::getById($_GET["id"]);
$alumno->delById($_GET["id"]);
print "<script>window.location='index.php?view=viewgrado_crear_alumno&id=$_POST[id_grado]';</script>";


?>