
<br> <section class="content">
   <div class="container-fluid">
   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addmaterial" action="index.php?view=addmaterial" role="form">
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
					<textarea name="titulo" class="form-control form-control-sm"  rows="1" id="titulo" placeholder="titulo"></textarea>
	<textarea name="descripcion" class="form-control form-control-sm"  rows="5" id="descripcion" placeholder="descripcion"></textarea>
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
	
	<input type="hidden" name="id_grado" value="<?php echo $_GET["id_mat"];?>">
      <center><button type="submit" class="btn btn-primary"><h5>Almacenar</h5></button></center>
    </div>
  </div>
  </div>



  
 
  </div>
  	</div>

</form>
</div>
</section>




