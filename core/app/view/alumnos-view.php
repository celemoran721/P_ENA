	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
                 
                  <i class="fa "><h1><p class="text">Listado de Alumnos</p></h1></i>
         

                <div class="card-tools">


                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-download"></i> Descargar <span class="caret"></span>
				  </button>
				    <ul class="dropdown-menu" role="menu">
				<li><a href="report/providers-word.php"><h6 class = "text-dark">Word 2007 (.docx)</h6></a></li>
				
					</ul>
			   
					
					 
                </div>
				
              </div>
<br>
						<?php


$alumns = AlumnosGradoData::getAll();


		if(count($alumns)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover table-striped ">
			<thead>
			<th>Nombre</th>
			<th>Código</th>
			<th>Grado</th>
			<th>Dirección</th>
			<th>Alergias</th>
			<th>Medicamento</th>
			<th>Encargado</th>
			<th>Teléfono</th>
			<th></th>
			</thead>
			<?php
			foreach($alumns as $al){
				$alumn = $al->getAlumn();
				$grado = $al->getGrado();
				?>
				<tr>
				<td><small><?php echo $alumn->nombres." ".$alumn->apellidos; ?></small></td>
				<td><small><?php echo $alumn->codigo; ?></small></td>
				<td><small><?php echo $grado->nombre; ?></small></td>
				<td><small><?php echo $alumn->direccion; ?></small></td>
				<td><small><?php echo $alumn->alergias; ?></small></td>
				<td><small><?php echo $alumn->medicamento; ?></small></td>
				<td><small><?php echo $alumn->ref_nombre; ?></small></td>
				<td><small><?php echo $alumn->ref_telefono; ?></small></td>
				<td style="width:125px;"> <small>
				<a href="index.php?view=editalumno&id=<?php echo $alumn->id;?> "class="btn btn-warning btn-sm"><small>Editar</small></a> 
				<a href="index.php?view=viewalumno&id=<?php echo $alumn->id; ?>" class="btn btn-sm btn-sm"><i class="fa fa-eye"></i></a></td>
				</small>
				</td>

				
				</tr>
				<?php

			}




		
		}else{
			echo "<p class='alert alert-danger'>No hay Alumnos en el sistema</p>";
		}


		?>



	</div>
</div>
	</div>
</div>
</section>