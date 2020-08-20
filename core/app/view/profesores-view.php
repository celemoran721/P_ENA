	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
                 
                  <i class="fa "><h1><p class="text">Listado de Profesores</p></h1></i>
         

                <div class="card-tools">

				  <a href="index.php?view=newprofesor" class="btn btn-default text-dark"><i class='fa fa-user'></i> Nuevo Profesor</a>
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
         
		$profesores = PersonaData::getAllProf();
		if(count($profesores)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover table-striped ">
			<thead>
			<th>Nombre</th>
			<th>Rol</th>
			<th>DPI</th>
			<th>Dirección</th>
			<th>Teléfono 1</th>
			<th>Teléfono 2</th>
			<th>Correo</th>
			<th></th>
			</thead>
			<?php
			foreach($profesores as $profesor){
			$rol =  $profesor->getRol();
			?>
				<tr>
				<td ><small><?php echo $profesor->nombres." ".$profesor->apellidos; ?> </small></td>
				<td> <small><?php echo $rol->nombre; ?> </small></td>
				<td><small><?php echo $profesor->dpi; ?></small></td>
				<td><small><?php echo $profesor->direccion; ?></small></td>
				<td><small><?php echo $profesor->telefono_1; ?></small></td>
				<td><small><?php echo $profesor->telefono_2; ?></small></td>
				<td><small><?php echo $profesor->correo; ?></small></td>
				<td style="width:175px;" > <small>
				 
                      
                  
				<a  href="index.php?view=editprofesor&id=<?php echo $profesor->id;?>" class="btn btn-warning btn-sm"><small>Editar</small></a>
				<a href="index.php?view=delprofesor&id=<?php echo $profesor->id;?>" class="btn btn-danger btn-sm"><small>Eliminar</small></a>
                <a href="index.php?view=viewprofesor&id=<?php echo $profesor->id; ?>" class="btn btn-sm btn-sm"><i class="fa fa-eye"></i></a></td>

				</small></td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Profesores en el sistema</p>";
		}


		?>

			</div>
	</div>
</div>
</div>
</section>