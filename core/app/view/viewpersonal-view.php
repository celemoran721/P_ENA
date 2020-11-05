<?php 

$personal = PersonaData::getById($_GET["id"]);

?>
<br> <section class="content">
   <div class="container-fluid">
  <form class="form-horizontal" method="post" enctype="multipart/form-data" id="editpersonal" action="index.php?view=updatepersonal" role="form">
<div class="row">
	<div class="col-md-6">
	 <div class="card card-info">
      <div class="card-header">
	 <i class="fa "><h1>Consultar Personal</h1></i>
	</div>
		


   
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombre*</label>
    <div class="col-md-9">
	<fieldset disabled>
      <input type="text" name="ref_nombre" required class="form-control" id="ref_nombre" value="<?php echo $personal->nombres." ".$personal->apellidos;?>" placeholder="Nombres">
    </div>
  </div>
    </div>
  
  
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">DPI*</label>
    <div class="col-md-9">
	<fieldset disabled>
      <input type="text" name="dpi" required class="form-control" id="dpi" value="<?php echo $personal->dpi;?>" placeholder="DPI">
    </div>
  </div>
    </div>

 <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Cargo*</label>
    <div class="col-md-9">
	<fieldset disabled>
      <input type="text" name="profesion" required class="form-control" id="profesion" value="<?php echo $personal->profesion;?>" placeholder="Cargo">
    </div>
  </div>
    </div>


   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Dirección*</label>
    <div class="col-md-9">
	<fieldset disabled>
      <input type="text" name="direccion" required class="form-control" id="direccion" value="<?php echo $personal->direccion;?>" placeholder="Dirección">
    </div>
  </div>
    </div>
  
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Teléfono *</label>
    <div class="col-md-9">
	<fieldset disabled>
      <input type="text" name="telefono_1" required class="form-control" id="telefono_1" value="<?php echo $personal->telefono_1;?>" placeholder="Teléfono">
    </div>
  </div>
    </div>
  
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Correo*</label>
    <div class="col-md-9">
	<fieldset disabled>
      <input type="text" name="correo" required class="form-control" id="correo" value="<?php echo $personal->correo;?>" placeholder="Correo">
    </div>
  </div>
    </div>
  

   
  
  </div>
  

  <p class="alert alert-warning"></p>
  </div>
    	<br>
	
		   <div class="col-6">
		   
		     <div class="card card-success">
              <div class="card-header">
            
       
	              <center><i class="fa "><h1>Colegio ENA</h1></i></center>
				</div>
				

				

  
			<div class="image">
		
		        <br>
                <?php if($personal->image!=""){?>

 
				<center> <img src="storage/personal/<?php echo $personal->image;?>" class="img-responsive" style="width:70%"></td> </center>

				<?php } else{?>
		         <center> <img src="storage/personal/not.jpg" class="img-responsive" style="width:70%"></td> </center>
				<?php }?>
               </div>
			   
<br>
	
  </div> 

	

</div>
 </div>
</form>
	</div>
</section>