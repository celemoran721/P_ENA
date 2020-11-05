	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
                 
                  <i class="fa "><h1><p class="text">Listado de Usuarios</p></h1></i>
         

                <div class="card-tools">

				  <a href="index.php?view=newpersonal" class="btn btn-default text-dark"><i class='fa fa-user'></i> Nuevo Usuario</a>
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
         
		$usuarios = PersonaData::getAllPer();
		//print_r($usuarios);
		if(count($usuarios)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover table-striped ">
			<thead>
			<th>Nombre</th>
			<th>Cargo</th>
			<th>DPI</th>
			<th>Dirección</th>
			<th>Teléfono 1</th>
			<th>Correo</th>
			<th></th>
			</thead>
			<?php
			foreach($usuarios as $usuario){
			
			
			?>
				<tr>
				<td ><small><?php echo $usuario->nombres." ".$usuario->apellidos; ?> </small></td>
				<td> <small><?php echo $usuario->profesion; ?> </small></td>
				<td><small><?php echo $usuario->dpi; ?></small></td>
				<td><small><?php echo $usuario->direccion; ?></small></td>
				<td><small><?php echo $usuario->telefono_1; ?></small></td>
				<td><small><?php echo $usuario->correo; ?></small></td>
				<td style="width:175px;" > <small>
				 
                      
                  
				<a  href="index.php?view=editpersonal&id=<?php echo $usuario->id;?>" class="btn btn-warning btn-sm"><small>Editar</small></a>
				<a href="index.php?view=delpersonal&id=<?php echo $usuario->id;?>" class="btn btn-danger btn-sm"><small>Eliminar</small></a>
                <a href="index.php?view=viewpersonal&id=<?php echo $usuario->id; ?>" class="btn btn-sm btn-sm"><i class="fa fa-eye"></i></a></td>

				</small></td>
				</tr>
				<?php
				
			}



		}else{
			echo "<p class='alert alert-danger'>No hay usuarios en el sistema</p>";
		}


		?>

			</div>
	</div>
</div>
</div>
</section>