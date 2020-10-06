<?php
$tareas = TareaData::getById($_GET["id_mat"]);
foreach($tareas as $ta){
//print_r($ta);

?>
<br> 


        <div class="col-md-12">
			<div class="card card-warning">
			   <div class="card-header">
<h1>  <center> Tareas recibidas de <?php echo $ta->nombre;} ?>  </center></h1>
               
              </div>
			</div>
		</div>		
		<div class="col-md-12">






</div>
			  
			<?php
			$mate = AsignacionTareaData::getById($ta->id);
			$grado = AsignacionBGMPData::getAllByMat($mate->id_materia);
			foreach($grado as $g){						
			//print_r($g);
			$alumno = AlumnosGradoData::getAllByGradoId($g->id_grado);
            foreach ($alumno as $al){
			$alum = $al->getAlumnos();	
			foreach($alum as $a){
			//print_r($a);
			?>


    <section class="content">
      <div class="container-fluid">
	  
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                     <div class="post">
                      <div class="user-block">
                       <div class="image">
				          <img class="img-circle img-bordered-sm" src="storage/alumno/<?php echo $a->image;?>" alt="user image">
		                </div>
                        <span class="username">
                          <a><?php echo $a->nombres." ".$a->apellidos; ?></a>
                         
                        </span>
						 <p>
						 
                       <?php 
					   $info = EntregaTareaData::getAllByTa($ta->id);
					   foreach($info as $inf);
					   if (($a->id)==($inf->persona_id)){
						?>
						<br>
						<?php
					   echo $inf->comentario; }?>
                      </p>
					  
						
					  
					  <p> 
                       <?php 
					   $info = EntregaTareaData::getAllByTa($ta->id);
					   foreach($info as $inf);
					   if (($a->id)==($inf->persona_id)){
						?>
						<br>
						<?php
						 //echo $inf->documento; ?>
						<a href="tareas/" download="<?php
					   echo $inf->documento; ?>">
						Descargar Archivo
					   <?php } 

							else{
								echo "<p class='alert alert-danger'>No entregó la tarea</p>";}
							?>
						</a>
						                      
                       
					  
                      </p>
                      
                    </div>
              </div>
             
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
			<?php  }}}?>



