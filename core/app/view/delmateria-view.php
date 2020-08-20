<?php
$asig = AsignacionBGMPData::getAllByMateriaId($_GET["id"]);
foreach ($asig as $t) {
	$t->del();
}



print "<script>window.location='index.php?view=materias';</script>";


?>
