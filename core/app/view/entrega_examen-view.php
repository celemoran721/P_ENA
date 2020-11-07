<?php 

$bim= $_SESSION['bimestre_id'];
	$entrega = EntregaExamenData::getAllByTa($_GET["id"],$_SESSION['persona_id']);
				
			?>
			
			<?php if (isset ($entrega)){ ?>
			<p class="alert alert-danger">El examen ya fue entregado</p>
			<?php }
			else { 
?>
<br> <section class="content">
   <div class="container-fluid">
   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addentrega_examendoc" action="index.php?view=addentrega_examendoc" role="form">
	<div class="row">
	<div class="col-md-12">
	 <div class="card card-success">
      <div class="card-header">
	<center><i class="fa "><h1>Entrega del Examen </h1></i></center>
	</div>
	</div>
	
		<?php 
			$asig = AsignacionExamenData::getByIdAsig($_GET["id"]);
	
	        $ta = ExamenData::getByIdOne($asig->id_examen);
	      // print_r($ta);
	        $prof = $ta->getProfesor();
	       
		   
			
			$fecha = ExamenData::getfecha();
			//print_r($fecha);
			if((($fecha->f)>($ta->f_inicio)) & (($fecha->f)<($ta->f_entrega))) {
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
                        <h5>examen: <?php echo $ta->nombre; ?></h5>
                      </p>
                      <p>
                        <?php echo $ta->descripcion; ?>
                      </p>

				  <p>

						<a href="examen/<?php
					   echo $ta->documento; ?>" target="_blank">Descargar archivo</a>
						
                      </p>
                      <p>
                        
                        <span class="float-right">
                          <a class="link-black text-sm">
                            <i class=" mr-1"></i> Valor: <?php echo $ta->valor; ?> puntos
                          </a>
                        </span>

                      </p>



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
      <center><button type="submit" class="btn btn-primary"><h5>Enviar examen</h5></button></center>
    </div>
  </div>
  </div>



  
 
  </div>
  	</div>

</form>
</div>
</section>
			<?php } 
			else{
				echo "<p class='alert alert-danger'>No se encuentra dentro del plazo de entrega, verifique la fecha o comuniquese con el profesor.</p>";
			}}?>



