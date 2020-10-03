	 <?php
	 $bimestre = BimestresData::getById($_GET["id"]);
	 $usuario = PersonaData::getById($_SESSION["persona_id"]);
	// $calificacion = CalificacionCategoriaData::getAllCal();
	 $_SESSION['bimestre_id']=$bimestre->id ;
	 
	//print_r($_SESSION['bimestre_id']);
	 $res="0";
     ?>
	 <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
                 
                  <i class="fa "><h2><p class="text">Materias Asignadas a: <?php echo $usuario->nombres." ".$usuario->apellidos ?> </p> </h2></i>
         

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

			
			
  	          <div class="col-10">
            <!-- jQuery Knob -->
              <div class="card card-warning">
              <div class="card-header">
            
       <i class="fa "><h3><?php echo $bimestre->nombre ?></h3></i>
	   
	
		
				</div>
				
				         <?php
		$grados = AlumnosGradoData::getAllByAlumnId($usuario->id);
		foreach($grados as $grado):
		$materias = AsignacionBGMPData::getAllByGradoId($grado->id_grado);
	   // print_r($grados);
		if(count($materias)>0){
			
			
		?>
				
			<table class="table table-bordered table-hover table-striped "> 
			<thead>
			<th>Materia</th>
			<th>Profesor</th>
			<th></th>
			
			
			</thead>
			
			<?php
		    foreach($materias as $materia){
			$mat =  $materia->getMateria();
			$prof =  $materia->getProfesor();
			?>

			<tr>
				<td style="width:300px;"><?php echo $mat->nombre; ?></td>
				<td style="width:300px;"><?php echo $prof->nombres." ".$prof->apellidos; ?></td>
				<td style="width:300px;">
				<p>
				<a href="index.php?view=viewinfo_mat&id=<?php echo $mat->id; ?>" 
				 class="link-blue text-sm mr-2"><i class="fas  mr-1"></i> Visualizar contenido</a>

				</p>
				</td>
			<tr>
			<?php
			}
			?>

			
				

				<?php

			



		}else{
			echo "<p class='alert alert-danger'>No hay Materia asignadas</p>";
		}

		?>
		<?php
				endforeach;?>



	</div>
</div> 

	



	</div>
	
</div>
</section>