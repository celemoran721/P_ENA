<?php
if(count($_POST)>0){
	$mate = new ExamenData();
	$mate->nombre = $_POST["nombre"];
	$mate->descripcion = $_POST["descripcion"];
	$mate->valor = $_POST["valor"];
	$mate->f_inicio = $_POST["f_inicio"];
	$mate->f_entrega = $_POST["f_entrega"];
	$mate->persona_id = $_SESSION["persona_id"];
	//print_r($_FILES["documento"]);
		if(isset($_FILES["documento"])){
		  
		$documento = new Upload($_FILES["documento"]);
	 
			if($documento->uploaded){
				$documento->Process("examen");
					if($documento->processed){
						$mate->documento = $documento->file_dst_name;
						$a= $mate->add_examendoc();
						
						$at = new AsignacionExamenData();
						$at->id_examen = $a[1];
						$at->id_materia = $_POST["id_mat"];
						$at->id_bimestre = $_SESSION['bimestre_id'];
						$at->persona_id = $_SESSION["persona_id"];
						$at->addex();

					}
								   print "<script>window.location='index.php?view=examenes&id_mat=$at->id_materia';</script>";
							
					}else {
								?>
							
								<p class="alert alert-danger">No seleccionó ningún documento</p> 
							<?php
							 
}
							}

							
} 
