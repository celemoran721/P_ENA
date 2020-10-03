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
            
                 
                  <i class="fa "><h2><p class="text">Tareas creadas por el profesor: <?php echo $usuario->nombres." ".$usuario->apellidos ?> </p> </h2></i>
				
              </div>
			  </div>
			  </div>
		
<br>

			
			
  	          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-warning">
              <div class="card-header">
            
       <i class="fa "><h3><?php echo $bimestre->nombre ?></h3></i>
	   
	
		
				</div>
				
				         <?php
		$asignacion = AsignacionBGMPData::getAllByProfMatId($usuario->id);
		// print_r($asignacion);
	
		if(count($asignacion)>0){
			
		?>
				
			<table class="table table-bordered table-hover table-striped "> 
			<thead>
			<th>Materia</th>
			<th>Cantidad de tareas</th>
			<th></th>
			
			
			
			
			</thead>
			
			<?php
			foreach($asignacion as $materia){
			$mat =  $materia->getMateria();
			$dato= AsignacionBGMPData ::getAllMatProfBy($usuario->id,$mat->id);
			//$cat = TareaMateriaData::getAllCountCal($mat->id);
			//$cat = AsignacionBGMPData::getAllCountCal($usuario->id,$mat->id,$_SESSION['bimestre_id']);
			//print_r($cat);
			 $_SESSION['asig_id']=$dato->id_materia ;
			//print_r($_SESSION['asig_id']);
			?>
				<tr>
				<td style="width:200px;"><?php echo $mat->nombre; ?></td>



				<td style="width:75px;" >
				<fieldset disabled>
				<?php 
				$id_tarea = AsignacionTareaData::getAllCountCal($mat->id,$_SESSION['bimestre_id']);
				?>
				<form id="form-<?php 
				echo $mat->id; ?>">
				<?php foreach($id_tarea as $a):
				//val es la cantidad de tareas que traigo de la data en el conteo
				if ( count($a->val) >= 1 ){
			    ?>
				<option value="<?php echo $a->id;?>"><?php echo $a->val;?></option>
                <?php }
				else{
					?><option value="<?php echo $a->id;?>"><?php echo "0";?></option>
				<?php
				}
				?>
				<?php
				endforeach;?></form>
				</td >
				
				<td style="width:40px;"> <small>
				<a href="index.php?view=tareas&id_mat=<?php echo $materia->id_materia; ?>" class="btn btn-sm btn-sm"><i class="fa fa-plus-circle nav-icon"> Tareas</i></a>
				</small>  </td>




				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Materia asignadas</p>";
		}


		?>


	</div>
</div>

	



	</div>
	
</div>
</section>