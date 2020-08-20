	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
                 
                  <i class="fa "><h1><p class="text">Listado de Padres</p></h1></i>
         

                <div class="card-tools">

				  <a href="index.php?view=newpadre" class="btn btn-default text-dark"><i class='fa fa-user'></i> Nuevo Padre</a>
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


$padres = PersonaData::getAllPadre();


		if(count($padres)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover table-striped ">
			<thead>
			<th>Nombre Completo</th>
			<th>DPI</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Correo</th>
			
			
			<th></th>
			</thead>
			<?php
			foreach($padres as $padre){
				//$padre = $al->getpadre();
				
				?>
				<tr>

				<td><small><?php echo $padre->ref_nombre; ?></small></td>
				<td><small><?php echo $padre->ref_dpi; ?></small></td>
				<td><small><?php echo $padre->ref_direccion; ?></small></td>
				<td><small><?php echo $padre->ref_telefono; ?></small></td>
				<td><small><?php echo $padre->ref_correo; ?></small></td>
				<td style="width:175px;"> <small>
				<a href="index.php?view=editpadre&id=<?php echo $padre->id;?> "class="btn btn-warning btn-sm"><small>Editar</small></a> 
				<a href="index.php?view=delpadre&id=<?php echo $padre->id;?>" class="btn btn-danger btn-sm"><small>Eliminar</small></a>
				<a href="index.php?view=viewpadre&id=<?php echo $padre->id; ?>" class="btn btn-sm btn-sm"><i class="fa fa-eye"></i></a></td>
				
				</small>
				</td>

				
				</tr>
				<?php

			}




		
		}else{
			echo "<p class='alert alert-danger'>No hay padres en el sistema</p>";
		}


		?>



	</div>
</div>
</div>
</div>
</section>