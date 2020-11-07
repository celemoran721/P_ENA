<?php
	//print_r($_POST["id_padre"]);

if(count($_POST)>0){
	//print_r($_FILES["documento"]);
	$material = ExamenData::getByIdOne($_POST["id_mat"]);
	$material->nombre = $_POST["nombre"];
	$material->descripcion = $_POST["descripcion"];
	$material->valor = $_POST["valor"];
	$material->f_inicio = $_POST["f_inicio"];
	$material->f_entrega = $_POST["f_entrega"];
	$material->persona_id = $_SESSION["persona_id"];
	//print_r($_FILES["documento"]);
		if(isset($_FILES["documento"])){
		  
		$documento = new Upload($_FILES["documento"]);
	 
			if($documento->uploaded){
				$documento->Process("examen");
					if($documento->processed){
						$material->documento = $documento->file_dst_name;
						$a= $material->updateExdoc_D();
						
						

					}
								   //print "<script>window.location='index.php?view=materialrial&id_mat=$at->id_materialria';</script>";
							
					}else {
								$a= $material->updateExdoc();
							 
}
							}
							$at = AsignacionExamenData::getById($_POST["id_mat"]);
							
							//print_r($at);
							print "<script>window.location='index.php?view=examenes&id_mat=$at->id_materia';</script>";
							
							
} 