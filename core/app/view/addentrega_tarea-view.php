<?php

if(count($_POST)>0){
	$tarea = new EntregaTareaData();
	$tarea->comentario = $_POST["comentario"];
	$tarea->id_tarea = $_POST["id_grado"];
	$tarea->persona_id = $_SESSION["persona_id"];
	//print_r($tarea);
		if(isset($_FILES["documento"])){
		  
		$documento = new Upload($_FILES["documento"]);
	 
			if($documento->uploaded){
				$documento->Process("tareas");
					if($documento->processed){
						$tarea->documento = $documento->file_dst_name;
						$a= $tarea->add_entrega_tarea();

					}
					}else{
						 } 
							} else 
							{ ?>
  
								<p class="alert alert-danger">No seleccionó ningún documento</p> 
							<?php
							}
							print "<script>window.location='index.php?view=home';</script>"; }
							?>
