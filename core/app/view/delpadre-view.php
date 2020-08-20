<?php

$padre = PersonaData::getById($_GET["id"]);
$padre->delById($_GET["id"]);
print "<script>window.location='index.php?view=padres';</script>";


?>