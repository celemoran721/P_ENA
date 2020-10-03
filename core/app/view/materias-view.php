	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
                 
                  <i class="fa "><h1><p class="text">Listado de materias actuales</p></h1></i>
         

                <div class="card-tools">

				  <a href="index.php?view=newmateria" class="btn btn-default text-dark"><i class='fa fa-book'></i> Nueva Materia</a>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-download"></i> Descargar <span class="caret"></span>
				  </button>
				    <ul class="dropdown-menu" role="menu">
				<li><a href="report/providers-word.php"><h6 class = "text-dark">Word 2007 (.docx)</h6></a></li>
				
					</ul>
			   
					
					 
                </div>
				
              </div>
              <!-- /.card-header -->
            
	
	 


	
<br>

<?php
         
		$asigs = AsignacionBGMPData::getAllDesc();
		//$grados = GradosData::getAll();
		//foreach($grados as $grado):
	     //$et =  $grado->getEtapa();
		if(count($asigs)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover table-striped ">

			<thead>
			<th class="text-primary">Materia</th>
			<th class="text-primary">Grado al que Pertenece</th>
			<th class="text-primary">Etapa</th>
			<th class="text-primary">Profesor Asignado</th>
			
	
			<th></th>
			</thead>
			<?php
			foreach($asigs as $asig){
				$grado =  $asig->getGrado();
				$materia =  $asig->getMateria();
				$profesor =  $asig->getProfesor();
				
				
				
			
			
			?>
				<tr>
				<td><?php echo $materia->nombre; ?></td>
				
				<?php
				$gr2 = GradosData::getById($asig->id_grado);
				$et =  $gr2->getEtapa(); 
				//print_r($gr2);
				//foreach($gr2 as $g):
				//$et =  $g->getEtapa(); ?>
				
				
				
				<?php //endforeach; ?>
				<td><?php echo $grado->nombre; ?></td>
				<td><?php echo $et->nombre; ?></td>
				<td><?php echo $profesor->nombres." ".$profesor->apellidos; ?></td>
				
				
				
				<td style="width:150px;">
				
				<a href="index.php?view=delmateria&id=<?php echo $asig->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
               

				</td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Materias en el sistema</p>";
		}


		?>




</div>
	</div>

</div>
</div>
</section>