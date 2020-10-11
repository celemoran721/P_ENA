<?php
if(count($_POST)>0){
	$mate = new MaterialData();
	$mate->titulo = $_POST["titulo"];
	$mate->descripcion = $_POST["descripcion"];
	$mate->persona_id = $_SESSION["persona_id"];
	//print_r($_FILES["documento"]);
		if(isset($_FILES["documento"])){
		  
		$documento = new Upload($_FILES["documento"]);
	 
			if($documento->uploaded){
				$documento->Process("material");
					if($documento->processed){
						$mate->documento = $documento->file_dst_name;
						$a= $mate->add_material();
						
						$at = new AsignacionMaterialData();
						$at->id_material = $a[1];
						$at->id_materia = $_POST["id_grado"];
						$at->id_bimestre = $_SESSION['bimestre_id'];
						$at->persona_id = $_SESSION["persona_id"];
						$at->addan();

					}
								   echo "<p class='alert alert-warning'> El material de aprendizaje fue enviado con éxito</p>";
							
					}else {
								?>
							
								<p class="alert alert-danger">No seleccionó ningún documento</p> 
							<?php
							 
}
							}

							
} 