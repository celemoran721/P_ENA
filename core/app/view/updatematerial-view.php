<?php
	//print_r($_POST["id_padre"]);

if(count($_POST)>0){
	//print_r($_FILES["documento"]);
	$material = MaterialData::getByIdOne($_POST["id_mat"]);
	$material->titulo = $_POST["titulo"];
	$material->descripcion = $_POST["descripcion"];
	$material->persona_id = $_SESSION["persona_id"];
	//print_r($_FILES["documento"]);
		if(isset($_FILES["documento"])){
		  
		$documento = new Upload($_FILES["documento"]);
	 
			if($documento->uploaded){
				$documento->Process("material");
					if($documento->processed){
						$material->documento = $documento->file_dst_name;
						$a= $material->updateMat();
						
						

					}
								   //print "<script>window.location='index.php?view=materialrial&id_mat=$at->id_materialria';</script>";
							
					}else {
								$a= $material->updateMat2();
							 
}
							}
							$at = AsignacionMaterialData::getByIdO($_POST["id_mat"]);
							
							//print_r($at);
							print "<script>window.location='index.php?view=material&id_mat=$at->id_materia';</script>";
							
							
} 