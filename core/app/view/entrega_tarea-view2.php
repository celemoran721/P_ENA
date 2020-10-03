<?php 

$bim= $_SESSION['bimestre_id'];
$tarea = TareaData::getById($_GET["id"]);
//$_SESSION['tarea_id']=$tarea->id ;

//print_r($tarea);
?>
	  <br> <section class="content">
        <!-- row -->
        <div class="row">
        <div class="col-md-12">
		
			<div class="card card-success">
			   <div class="card-header">
				<center><i class="fa "><h1>Entrega de tareas </h1></i></center>
		
              
              </div>
			</div>
		</div>
		</div>
		</section>
		
		 <?php
foreach($tarea as $ta){
	$prof = $ta->getProfesor();
//$mat = $anu->getMateria();
//$prof = $anu->getProfesor();

//$contenido = AnuncioData::getById($anu->id_anuncio);
	//		foreach($contenido as $con){
				
				
			?>
			

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
              </div>
			   <div class="card-body">
			     <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
					
                      <div class="user-block">
                        <div class="image">
				          <img class="img-circle img-bordered-sm" src="storage/profesor/<?php echo $prof->image;?>" alt="user image">
		                </div>
                        <span class="username">
                          <a><?php echo $prof->nombres; ?></a>
                         
                        </span>
                        <span class="description"><?php echo $ta->creacion; ?></span>
						</div>
                      
                      <!-- /.user-block -->
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
					<br>
					</div>
		             </div>
					 </div>
					</div>
					</div>
					</div>
					</div>
		            </div>
					</section>
					
					
	<section class="content">
      <div class="container-fluid">
	  <form class="form-horizontal" method="post" id="addentrega_tarea" action="index.php?view=addentrega_tarea" role="form">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
              </div>
		
				  
				  <div class="card-footer">
                <div class="row">
				 
                  <div class="col-12">
                     <input type="file" name="documento" id="documento" placeholder="Seleccionar">
                  </div>

                </div>
                </div>
			  
                    </div>
					
<div class="card card">
	 
 <div class="form-group">
    <div class="col-lg-offset-8 col-lg-12">
	<input type="hidden" name="id_entrega_tarea" value="<?php echo $_GET["id"];?>">
      <center><button type="submit" class="btn btn-primary">Agregar tarea</button></center>
    </div>
  </div>
  </div>

	

	</div>
		</div>
              </div>
			  
              <!-- /.card-body -->

              <!-- /.card-footer-->

		</form>
      </div>
    </section>
<?php }?>

            



