	
<br> <section class="content">
   <div class="container-fluid">
   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="index.php?view=adddescripexamendoc" action="index.php?view=adddescripexamendoc" role="form">
	<div class="row">
	<div class="col-md-12">
	 <div class="card card-success">
      <div class="card-header">
	<center><i class="fa "><h1>Nuevo exámen </h1></i></center>
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
					<textarea name="nombre" class="form-control form-control-sm"  rows="1" id="nombre" placeholder="Nombre"></textarea>
					<textarea name="descripcion" class="form-control form-control-sm"  rows="5" id="descripcion" placeholder="Indicaciones generales"></textarea>
					<textarea name="valor" class="form-control form-control-sm"  rows="1" id="valor" placeholder="Valor del exámen"></textarea>
		</div></div>
		
		 <div class="card-footer">
        <div class="row">
        <label for="inputEmail1" class="col-lg-4 control-label">Tiempo de inicio *</label>
        <div class="col-md-8">
         <input type="datetime-local" name="f_inicio"  required valorue="<?php if(isset($_GET["f_inicio"])){ echo $_GET["f_inicio"]; }?>" class="form-control">
        </div>
        </div>
        </div>
		
		 <div class="card-footer">
        <div class="row">
        <label for="inputEmail1" class="col-lg-4 control-label">Tiempo de cierre*</label>
        <div class="col-md-8">
         <input type="datetime-local" name="f_entrega"  required valorue="<?php if(isset($_GET["f_entrega"])){ echo $_GET["f_entrega"]; }?>" class="form-control">
        </div>
        </div>
        </div>
		
		</div></div>			
	
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
	
	<input type="hidden" name="id_mat" value="<?php echo $_GET["id_mat"];?>">
      <center><button type="submit" class="btn btn-primary"><h5>Almacenar</h5></button></center>
    </div>
  </div>
  </div>



  
 
  </div>
  	</div>

</form>
</div>
</section>




