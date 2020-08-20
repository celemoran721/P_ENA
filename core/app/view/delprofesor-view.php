<?php

$profesor = PersonaData::getById($_GET["id"]);
$profesor->delById($_GET["id"]);
print "<script>window.location='index.php?view=profesores';</script>";


?>