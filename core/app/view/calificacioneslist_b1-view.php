	 <?php
	 $bimestre = BimestresData::getById($_GET["id"]);
	 $usuario = PersonaData::getById($_SESSION["persona_id"]);
	 $calificacion = CalificacionCategoriaData::getAllCal();
	 $_SESSION['bimestre_id']=$bimestre->id ;
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
            
       <i class="fa "><h3><?php echo $bimestre->nombre ?></h3></i>
	   
	
		
				</div>
				
				         <?php
		$asignacion = AsignacionBGMPData::getAllByProfMatId($usuario->id);
	
		if(count($asignacion)>0){
			
		?>
				
			<table class="table table-bordered table-hover table-striped "> 
			<thead>
			<th>Nombre</th>
			<th>Ex. P1</th>
			<th>Ex. P2</th>
			<th>Ex. Final</th>
			<th>Tareas</th>
			<th>Proyectos</th>
			<th>Ej. en clase</th>
			<th>Hojas de trabajo</th>
			<th>Otros</th>
			<th></th>
			</thead>
			
			<?php
			foreach($asignacion as $materia){
			$mat =  $materia->getMateria();
			$cat = AsignacionBGMPData::getAllCountCal($usuario->id,$mat->id,$_SESSION['bimestre_id']);
			//print_r($cat);
			// $_SESSION['materia_id']=$mat->id ;
			
			?>
				<tr>
				<td><?php echo $mat->nombre; ?></td>

				
				<td style="width:70px;" >
				<fieldset disabled>
				<form id="form-<?php echo $mat->id; ?>">
				<?php foreach($cat as $c):
				if ( ($c->cat) == 1 ){
			    ?>
				<option value="<?php echo $c->id;?>"><?php echo $c->val;?></option>
                <?php }
				endforeach;?></form>
				</td >
				
				
				<td style="width:70px;" >
				<fieldset disabled>
				<form id="form-<?php echo $mat->id; ?>">
				<?php foreach($cat as $c):
				if ( ($c->cat) == 7 ){
			    ?>
				<option value="<?php echo $c->id;?>"><?php echo $c->val;?></option>
                <?php }
				endforeach;?></form>
				</td >
				
				<td style="width:90px;" >
				<fieldset disabled>
				<form id="form-<?php echo $mat->id; ?>">
				<?php foreach($cat as $c):
				if ( ($c->cat) == 8 ){
			    ?>
				<option value="<?php echo $c->id;?>"><?php echo $c->val;?></option>
                <?php }
				endforeach;?></form>
				</td >
				
								
				<td style="width:60px;" >
				<fieldset disabled>
				<form id="form-<?php echo $mat->id; ?>">
				<?php foreach($cat as $c):
				if ( ($c->cat) == 0 ){
			    ?>
				<option value="<?php echo $c->id;?>"><?php echo $c->val;?></option>
                <?php }
				endforeach;?></form>
				</td >
				
				
				<td style="width:70px;" >
				<fieldset disabled>
				<form id="form-<?php echo $mat->id; ?>">
				<?php foreach($cat as $c):
				if ( ($c->cat) == 4 ){
			    ?>
				<option value="<?php echo $c->id;?>"><?php echo $c->val;?></option>
                <?php }
				endforeach;?></form>
				</td >
				
				<td style="width:110px;" >
				<fieldset disabled>
				<form id="form-<?php echo $mat->id; ?>">
				<?php foreach($cat as $c):
				if ( ($c->cat) == 2 ){
			    ?>
				<option value="<?php echo $c->id;?>"><?php echo $c->val;?></option>
                <?php }
				endforeach;?></form>
				</td >
				
				<td style="width:150px;" >
				<fieldset disabled>
				<form id="form-<?php echo $mat->id; ?>">
				<?php foreach($cat as $c):
				if ( ($c->cat) == 5 ){
			    ?>
				<option value="<?php echo $c->id;?>"><?php echo $c->val;?></option>
                <?php }
				endforeach;?></form>
				</td >
				
				<td style="width:50px;" >
				<fieldset disabled>
				<form id="form-<?php echo $mat->id; ?>">
				<?php foreach($cat as $c):
				if ( ($c->cat) == 6 ){
			    ?>
				<option value="<?php echo $c->id;?>"><?php echo $c->val;?></option>
                <?php }
				endforeach;?></form>
				</td >
				

				<td style="width:60px;"> <small>
				<a href="index.php?view=view_calificaciones_list&id_mat=<?php echo $mat->id; ?>" class="btn btn-sm btn-sm"><i class="fa fa-eye"></i></a></td>
				</small>  </td>

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