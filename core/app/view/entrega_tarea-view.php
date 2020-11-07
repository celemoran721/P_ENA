<?php 

$bim= $_SESSION['bimestre_id'];
	$entrega = EntregaTareaData::getAllByTa($_GET["id"],$_SESSION['persona_id']);
				
			?>
			
			<?php if (isset ($entrega)){ ?>
			<p class="alert alert-danger">La tarea ya fue entregada</p>
			<?php }
			else { 
?>
<br> <section class="content">
   <div class="container-fluid">
   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addentrega_tarea" action="index.php?view=addentrega_tarea" role="form">
	<div class="row">
	<div class="col-md-12">
	 <div class="card card-success">
      <div class="card-header">
	<center><i class="fa "><h1>Entrega de tareas </h1></i></center>
	</div>
	</div>
	
		<?php 
			$asig = AsignacionTareaData::getByIdAsig($_GET["id"]);
	
	        $ta = TareaData::getByIdOne($asig->id_tarea);
	        
	        $prof = $ta->getProfesor();
	        
			
			$fecha = TareaData::getfecha();
			if(($fecha->f)>($ta->f_entrega)){
				echo "<p class='alert alert-danger'>El plazo de entrega expiró, comuniquese con el profesor.</p>";
							
					}else {
			?>

			 <div class="card ">
      
			   <div class="card-body">
			     <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
					
                      <div class="user-block">
                        <div class="image">
				         <?php if(($prof->image)==NULL){?>
				          
						  <img class="img-circle img-bordered-sm" src="storage/not.jpg" alt="user image">
						<?php } else{?>
							<img class="img-circle img-bordered-sm" src="storage/profesor/<?php echo $prof->image;?>" alt="user image">
						<?php }
						?>
						</div>
                        <span class="username">
                          <a><?php echo $prof->nombres; ?></a>
                         
                        </span>
                        <span class="description"><?php echo $ta->creacion; ?></span>
						</div>
                      
                      <!-- /.user-block -->
					  <p>
                        <h5>Tarea: <?php echo $ta->nombre; ?></h5>
                      </p>
                      <p>
                        <?php echo $ta->descripcion; ?>
                      </p>

                      <p>
                        <a  class="link-black text-sm mr-2"><i class="fas  mr-1"></i> Fecha de entrega:</a>
                        <a  class="link-black text-sm"><i class="far  mr-1"></i> <?php echo $ta->f_entrega; ?></a>
                        <span class="float-right">
                          <a class="link-black text-sm">
                            <i class=" mr-1"></i> Valor: <?php echo $ta->valor; ?> puntos
                          </a>
                        </span>

                      </p>

                    <!--  <textarea name="comentario" class="form-control form-control-sm"  rows="5" id="comentario" placeholder="Comentario"></textarea>
					-->

					</div>
		             </div>
					 </div>
					</div>
					</div>		
	
			 <div class="card ">

	<div class="card-body">
			     <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
	<textarea name="comentario" class="form-control form-control-sm"  rows="5" id="comentario" placeholder="Comentario"></textarea>
		</div></div></div></div>			
	
	         <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg control-label"></label>
                  <div class="col-8">
                     <input type="file" name="documento" id="documento" placeholder="Seleccionar">
                  </div>

                </div>
              </div>
			  
			  


  
    </div>
  </div>
  
 
 	<div class="col-md-12">
  	 <div class="card card">
	 <div class="card-header">
	 </div>
 <div class="form-group">
    <div class="col-lg-offset-8 col-lg-12">
	
	<input type="hidden" name="id_grado" value="<?php echo $asig->id;?>">
      <center><button type="submit" class="btn btn-primary"><h5>Enviar Tarea</h5></button></center>
    </div>
  </div>
  </div>



  
 
  </div>
  	</div>

</form>
</div>
</section>
			<?php }}?>



