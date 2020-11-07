<?php

if(count($_POST)>0){
	$tarea = new EntregaExamenData();
	$tarea->comentario = $_POST["comentario"];
	$tarea->id_examen = $_POST["id_grado"];
	$tarea->persona_id = $_SESSION["persona_id"];
	
		if(isset($_FILES["documento"])){
		  
		$documento = new Upload($_FILES["documento"]);
	 
			if($documento->uploaded){
				$documento->Process("examen_entrega");
					if($documento->processed){
						$tarea->documento = $documento->file_dst_name;
						$a= $tarea->add_entrega_examen();

					}
								   echo "<p class='alert alert-warning'>El exámen fue enviado con éxito</p>";
							
					}else {
								?>
							
								<p class="alert alert-danger">No seleccionó ningún documento</p> 
							<?php
							 
}
							} 
} 
?>