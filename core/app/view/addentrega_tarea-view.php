<?php

if(count($_POST)>0){
	$tarea = new EntregaTareaData();
	$tarea->comentario = $_POST["comentario"];
	$tarea->id_tarea = $_POST["id_grado"];
	$tarea->persona_id = $_SESSION["persona_id"];
	
		if(isset($_FILES["documento"])){
		  
		$documento = new Upload($_FILES["documento"]);
	 
			if($documento->uploaded){
				$documento->Process("tareas");
					if($documento->processed){
						$tarea->documento = $documento->file_dst_name;
						$a= $tarea->add_entrega_tarea();

					}
								   echo "<p class='alert alert-warning'>La tarea fue enviada con éxito</p>";
							
					}else {
								?>
							
								<p class="alert alert-danger">No seleccionó ningún documento</p> 
							<?php
							 
}
							} 
} 
?>