<?php

$grado = GradosData::getById($_GET["id"]);
$grado->delById($_GET["id"]);
print "<script>window.location='index.php?view=grados_add_alumno';</script>";


?>