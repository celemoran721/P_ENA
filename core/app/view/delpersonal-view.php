<?php

$personal = PersonaData::getById($_GET["id"]);
$personal->delById($_GET["id"]);
print "<script>window.location='index.php?view=personal';</script>";


?>