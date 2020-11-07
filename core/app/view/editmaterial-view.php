<?php 

$bim= $_SESSION['bimestre_id'];
$as=$_SESSION['asig_id'];
$material = MaterialData::getById($_GET["id"]);
foreach($material as $an){
//print_r($material);
?>



  
<br> <section class="content">
   <div class="container-fluid">
   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="updatematerial" action="index.php?view=updatematerial" role="form">
	<div class="row">
	<div class="col-md-12">
	 <div class="card card-success">
      <div class="card-header">
	<center><i class="fa "><h1>Material de Aprendizaje </h1></i></center>
	</div>
	</div>

			 <div class="card ">
      
			   <div class="card-body">
			     <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
					
                    <!--  <textarea name="descripcion" class="form-control form-control-sm"  rows="5" id="descripcion" placeholder="descripcion"></textarea>
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
					<textarea name="titulo" required class="form-control"  id="titulo" rows="1"><?php echo $an->titulo;?> </textarea>
					<textarea name="descripcion" required class="form-control" id="descripcion" rows="7"> <?php echo $an->descripcion;?></textarea>
		</div></div></div></div>

						<div class="footer_box_content">
       <div class="cleaner_h10"></div>
      <div class="button_01"><a href="material/<?php
					      echo $an->documento;?>" target="_blank" > Descargar Archivo</a></div>
						</div>		
	
	<div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg control-label"></label>
                  <div class="col-8">
                     <input type="file" name="documento" id="documento"  placeholder="Seleccionar">
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
	
	<input type="hidden" name="id_mat" value="<?php echo $_GET["id"];?>">
      <center><button type="submit" class="btn btn-primary"><h5>Actualizar</h5></button></center>
    </div>
  </div>
  </div>



  
 
  </div>
  	</div>

</form>
</div>
</section>
<?php } ?>



