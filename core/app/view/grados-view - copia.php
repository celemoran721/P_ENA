	 
	 <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
                 
                  <i class="fa "><h1><p class="text">Grados-Colegio ENA</p></h1></i>
         

                <div class="card-tools">

				  <a href="index.php?view=newgrado" class="btn btn-default text-dark"><i class='fa fa-user'></i> Nuevo Grado</a>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-download"></i> Descargar <span class="caret"></span>
				  </button>
				    <ul class="dropdown-menu" role="menu">
				<li><a href="report/providers-word.php"><h6 class = "text-dark">Word 2007 (.docx)</h6></a></li>
				
					</ul>
			   
					
					 
                </div>
				
              </div>
			  </div>
			  </div>
		
<br>
         <?php
         
		$grados = GradosData::getAll();
		if(count($grados)>0){
			// si hay usuarios
			?>
			
			
  	          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-success">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Listado de grados</h1></i>
				</div>
			<table class="table table-bordered table-hover table-striped "> 
			<thead>
			<th>Nombre</th>
			<th>Etapa</th>
			<th>Alumnos</th>
			<th>Materias</th>
	
			<th></th>
			</thead>
			<?php
			foreach($grados as $grado){
			$etapa =  $grado->getEtapa();
			$alumns = AlumnosGradoData::getAllByCount($grado->id);
			$mats = AsignacionBGMPData::getAllByCount($grado->id);
			?>
				<tr>
				<td><?php echo $grado->nombre; ?></td>
				<td><?php echo $etapa->nombre; ?></td>
				

				<th><?php foreach($alumns as $alum):?>
                 <option value="<?php echo $alum->id;?>"><?php echo $alum->val;?></option>
                <?php endforeach;?></td>
				
				<td>
				
				<?php foreach($mats as $mat):?>
                 <option value="<?php echo $mat->id;?>"><?php echo $mat->val;?></option>
                <?php endforeach;?>
				
		
				<td style="width:250px;">
				<a href="index.php?view=viewgrado&id=<?php echo $grado->id;?>" class="btn btn-info btn-sm"><small>Crear alumnos</small></a>
				<a href="index.php?view=editgrado&id=<?php echo $grado->id;?>" class="btn btn-warning btn-sm"><small>Editar</small></a>
				<a href="index.php?view=delgrado&id=<?php echo $grado->id;?>" class="btn btn-danger btn-sm"><small>Eliminar</small></a>
				
				</td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Grados en el sistema</p>";
		}


		?>


	</div>
</div>

	



	</div>
	
</div>
</section>