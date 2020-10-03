<?php 

$padre = PersonaData::getById($_GET["id"]);

?>
<br> <section class="content">
   <div class="container-fluid">
  <form class="form-horizontal" method="post" enctype="multipart/form-data" id="editpadre" action="index.php?view=updatepadre" role="form">
<div class="row">
	<div class="col-md-6">
	 <div class="card card-info">
      <div class="card-header">
	 <i class="fa "><h1>Editar Encargado</h1></i>
	</div>
		


   
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombre Completo*</label>
    <div class="col-md-9">
      <input type="text" name="ref_nombre" required class="form-control" id="ref_nombre" value="<?php echo $padre->ref_nombre;?>" placeholder="Nombres">
    </div>
  </div>
    </div>
  
  
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">DPI*</label>
    <div class="col-md-9">
      <input type="text" name="dpi" required class="form-control" id="dpi" value="<?php echo $padre->dpi;?>" placeholder="DPI">
    </div>
  </div>
    </div>


   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Dirección*</label>
    <div class="col-md-9">
      <input type="text" name="ref_direccion" required class="form-control" id="ref_direccion" value="<?php echo $padre->ref_direccion;?>" placeholder="Dirección">
    </div>
  </div>
    </div>
  
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Teléfono *</label>
    <div class="col-md-9">
      <input type="text" name="ref_telefono" required class="form-control" id="ref_telefono" value="<?php echo $padre->ref_telefono;?>" placeholder="Teléfono">
    </div>
  </div>
    </div>
  
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Correo*</label>
    <div class="col-md-9">
      <input type="text" name="ref_correo" required class="form-control" id="ref_correo" value="<?php echo $padre->ref_correo;?>" placeholder="Correo">
    </div>
  </div>
    </div>
  

   
  
  </div>
  

  <p class="alert alert-warning">* Campos obligatorios</p>
  </div>
    	<br>
	
		   <div class="col-6">
		   
		     <div class="card card-success">
              <div class="card-header">
            
       
	              <center><i class="fa "><h1>Colegio ENA</h1></i></center>
				</div>
				

				

  
			<div class="image">
		
		        <br>
                <?php if($padre->image!=""){?>

 
				<center> <img src="storage/padre/<?php echo $padre->image;?>" class="img-responsive" style="width:50%"></td> </center>
				
				<?php }else{
				echo "<p class='alert alert-danger'>No hay imagen Registrada</p>";}
				?>
		         
               </div>
			   
			   	<div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Cambio de Imagen*</label>
                  <div class="col-9">
                     <input type="file" name="image" id="image" placeholder="">
                  </div>

                </div>
              </div>
	
  </div> 
<div class="card card">
	 <div class="card-header">
	 </div>
 <div class="card-footer">
    <div class="col-lg-offset-8 col-lg-12">
	   <input type="hidden" name="id_padre" value="<?php echo $padre->id;?>">
      <center><button type="submit" class="btn btn-primary">Actualizar Encargado</button></center>
    </div>
  </div>
  </div>
	

</div>
 </div>
</form>
	</div>
</section>