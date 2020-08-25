<?php
$asig = AsignacionBGMPData::getAllBy($_GET["id"]);

	$asig->delById($_GET["id"]);




print "<script>window.location='index.php?view=materias';</script>";


?>
