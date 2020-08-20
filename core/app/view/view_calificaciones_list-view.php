	 <?php
	 $bim=$_SESSION['bimestre_id'];
	 $bimestre = BimestresData::getById($bim);
	 $usuario = PersonaData::getById($_SESSION["persona_id"]);
	 $calificacion = CalificacionCategoriaData::getAllCal();
	 $calex = CalificacionCategoriaData::getAllCalEx();
     $mat=AsignacionBGMPData::getAllByMatAsignadas($usuario->id,$_GET["id_mat"]);
	 // print_r($_GET["id_mat"]);
		if(count($mat)>0){
     ?>
	 <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
                 
                  <i class="fa "><h2><p class="text">Materias Asignadas al Profesor: <?php echo $usuario->nombres." ".$usuario->apellidos ?> </p> </h2></i>
         

                <div class="card-tools">
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

			
			
  	          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-warning">
              <div class="card-header">
			  
			  <?php
			foreach($mat as $materia){
			$mat =  $materia->getMateria();
			 $_SESSION['materia_id']=$mat->id;
			//$alumns = AlumnosGradoData::getAllByCount($grado->id);
			//$mats = AsignacionBGMPData::getAllByCount($grado->id);
			?>
            
       <i class="fa "><h3><?php echo $bimestre->nombre." / Materia: ".$mat->nombre;   ?></h3></i>
		
				</div>
				

				
			<table class="table table-bordered table-hover table-striped "> 
			<thead>
			<th>Nombre</th>
			<th>Crear Exámen</th>
			<th>Crear</th>
			</thead>
			
				<tr>
				<td><?php echo $mat->nombre; ?></td>

				<td>
	   <div class="btn-group">
       <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
         <option class="fa fa-plus-circle nav-icon" value=""> Crear nuevo Exámen</option>
       </button>
         <ul class="dropdown-menu" role="menu">
		 
		  <?php 
							
							foreach($calex as $caex):
							
							
							
					?>
                
			  	 <li><a href="./?view=newexamen&id_cal=<?php echo $caex->id?>" class="nav-link active">
				 <option value="<?php echo $caex->id;?>"><?php echo $caex->nombre;?></option></a></li>
				
				<?php 	
							endforeach;
				?>
         
	
         </ul>
       </div>
				</td>


				<td>
	   <div class="btn-group">
       <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
         <option class="fa fa-plus-circle nav-icon" value=""> Crear nueva/o...</option>
       </button>
         <ul class="dropdown-menu" role="menu">
		 
		  <?php 
							
							foreach($calificacion as $cal):
							
							
							
					?>
                
			  	 <li><a href="./?view=newnota&id_cal=<?php echo $cal->id?>" class="nav-link active">
				 <option value="<?php echo $cal->id;?>"><?php echo $cal->nombre;?></option></a></li>
				
				<?php 	
							endforeach;
				?>
         
	
         </ul>
       </div>
				</td>

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