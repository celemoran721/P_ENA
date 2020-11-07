<?php
$v=0;
$espacio="--------------------------------------------";
$mate = AsignacionTareaData::getAllById($_GET["id_asigta"]);
foreach($mate as $m);
$tareas = TareaData::getById($m->id_tarea);
foreach($tareas as $ta){
	//$alum = $ta->getAlumno();	
//print_r($ta);

?>
<br> 


        <div class="col-md-12">
			<div class="card card-warning">
			   <div class="card-header">
<h1>  <center> Tareas recibidas de <?php echo $ta->nombre; ?>  </center></h1>
               
              </div>
			</div>
		</div>		
			  
			<?php
			
			$grado = AsignacionBGMPData::getAllByMat($m->id_materia);
			foreach($grado as $g){						

			$alumno = AlumnosGradoData::getAllByGradoId($g->id_grado);
            foreach ($alumno as $al){
			$alum = $al->getAlumnos();	
			foreach($alum as $a){
			//print_r($a);
			
			?>
 



    <section class="content">
      <div class="container-fluid">
	  <form class="form-horizontal" method="post" id="add_nota_tarea" action="index.php?view=add_nota_tarea" role="form">
        <div class="row">
          <div class="col-12"> 
            <!-- Default box -->
			
			<div class="card ">      
			   <div class="card-body">
			     <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                     <div class="post">
                      <div class="user-block">
						<?php if(($a->image)==NULL){?>
				          
						  <img class="img-circle img-bordered-sm" src="storage/not.jpg" alt="user image">
						<?php } else{?>
							 <img class="img-circle img-bordered-sm" src="storage/alumno/<?php echo $a->image;?>" alt="user image">
						<?php } ?>
						
                        <span class="username">
                          <a><?php echo $a->nombres." ".$a->apellidos; ?></a>
                         
                        </span>
						
						
	
						 
						 
                       <?php 
					   $info = EntregaTareaData::getAllByTa($m->id,$a->id);
					  
					   
						?>
						
						<p>
						<?php
					   echo $info->creacion; ?>
                      </p>
					
					
				 	 <p>
						<?php
					   echo $info->comentario; ?>
                      </p>
					  
					  
						<div class="footer_box_content">
                       <div class="cleaner_h10"></div>
                        <div class="button_01"><a href="tareas/<?php
					      echo $info->documento;?>" target="_blank" > Descargar Archivo</a></div>
						</div>
						
					  
					
					  
					   
--------------------------------------------------------------------------------------------------------------
                     <?Php $verifica = NotaTareaData::getAllByNota($info->id);
							
							if(isset($verifica)){ 
							
							echo "<p class='alert alert-danger'>El alumno ya tiene nota asignada</p>";  ?>
							
							 <p>
						<a >
						Nota asignada: <?php
					   echo $verifica->nota; ?>
						</a>
                      </p>
							
							<?php }else {
							//print_r($verifica);
							?>
					  
					  
					  

					  
						 
                          <div class="row">
						<label for="inputEmail1" class="col-lg-1 control-label">Nota</label>
							<div class="col-md-1">
						<input type="text" name="nota" required class="form-control" id="nota" placeholder="">
							</div>
						</div>
                        
						
							<div class="card-body">
							<div class="tab-content">
							<div class="active tab-pane" id="activity">
								<!-- Post -->
							<div class="post">
							<textarea name="comentario" class="form-control form-control-sm"  rows="5" id="comentario" placeholder="Comentario"></textarea>
							</div></div></div></div>		
						
						
						  	 
								<div class="form-group">
								<div class="col-lg-offset-8 col-lg-12">
								<input type="hidden" name="id_entrega" value="<?php echo $info->id;?>">
								<center><button type="submit" class="btn btn-primary">Almacenar Nota</button></center>
								</div>
								</div>
								
								
								
					   <?php } 
						
								?>

                    </div>
              </div>
             
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
		</div>
        </div>
		 </div>
		</form>
      </div>
    </section>
<?php  }}}}?>

