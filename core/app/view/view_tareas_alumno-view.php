
	  
	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
                <?php
				$materia = MateriasData::getById($_GET["id_mat"]); 
				$tareas = AsignacionTareaData::getByIdMatBim($_GET["id_mat"],$_SESSION['bimestre_id']); 

				?>
				
		<i class="fa "><h1><p class="text">Tareas de  <?php echo $materia->nombre; ?></p></h1></i>
       
              </div>





		
<br>
		<?php
         
		
		//print_r($tareas);
		if(count($tareas)>0){
			
			//print_r($anuncios);
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover table-striped ">
			<thead>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Valor</th>
			<th>Fecha de entrega</th>
			<th></th>
			</thead>
			<?php
			foreach($tareas as $ta){
			$t = TareaData::getById($ta->id_tarea); 
			foreach($t as $tare){
			//print_r($anu);
			?>
				<tr>
			<td ><small><?php echo $tare->nombre; ?> </small></td>
			<td ><small><?php echo $tare->descripcion; ?> </small></td>
			<td ><small><?php echo $tare->valor; ?> </small></td>
			<td ><small><?php echo $tare->f_entrega; ?> </small></td>
			
			<td style="width:200px;"> <small>
			<a href="index.php?view=entrega_tarea&id=<?php echo $tare->id; ?>" class="btn btn-sm btn-sm"><i class="fa fa-eye"></i></a>	
			</small></td>
				
				</tr>
			<?php }

			}



		}else{
			echo "<p class='alert alert-danger'>No hay tareas en el sistema</p>";
		}


		?>

			</div>
	</div>
</div>
</div>
</section>