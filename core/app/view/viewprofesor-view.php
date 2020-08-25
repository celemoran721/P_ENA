
<?php 

$profesor = PersonaData::getById($_GET["id"]);
$rol =  $profesor->getRol();
$roles = RolesData::getAll();


?>
<br> <section class="content">
   <div class="container-fluid">
  <form class="form-horizontal" method="post" enctype="multipart/form-data" id="editprofesor" action="index.php?view=updateprofesor" role="form">
<div class="row">
	<div class="col-md-6">
	 <div class="card card-info">
      <div class="card-header">
	 <i class="fa "><h1>Consultar Profesor</h1></i>
	</div>



   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombres</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="nombres" class="form-control" id="nombres" value="<?php echo $profesor->nombres; ?>" placeholder="">
    </div>
	</div>
  </div> 

  
    <div class="card-footer">
	<div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Apellidos</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="apellidos" class="form-control" id="apellidos" value="<?php echo $profesor->apellidos; ?>" placeholder="">
    </div>
	</div>
  </div> 
  
      <div class="card-footer">
	<div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">DPI</label>
    <div class="col-md-9">
	<fieldset disabled>
      <input type="text" name="ref_dpi" class="form-control" id="dpi" value="<?php echo $profesor->dpi; ?>" placeholder="">
    </div>
	</div>
  </div> 

  
  <div class="card-footer">
  <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Rol  Registrado</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="fecha" value="<?php echo $rol->nombre;?>" class="form-control" id="fecha" placeholder="Fecha Registrada">
    </div>
  </div>
  </div> 
  
  
	
    <div class="card-footer">
	<div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Profesión</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="profesion"  class="form-control" id="profesion" value="<?php echo $profesor->profesion; ?>" placeholder="">
    </div>
  </div> 
  </div> 

  
 
<div class="card-footer">
<div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Fecha de Nacimiento</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="fecha" value="<?php echo $profesor->fecha_nac;?>" class="form-control" id="fecha" placeholder="Fecha Registrada">
    </div>
  </div>
  </div> 
  
  
  
 <div class="card-footer">
 <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Edad</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="edad" class="form-control" id="edad" value="<?php echo $profesor->edad; ?>" placeholder="">
    </div>
  </div> 
  </div> 
 
 <div class="card-footer">
 <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Dirección</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="direccion"  class="form-control" id="direccion" value="<?php echo $profesor->direccion; ?>" placeholder="">
    </div>
  </div> 
  </div> 
  
  <div class="card-footer">
  <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Teléfono 1</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="telefono_1" class="form-control" id="" value="<?php echo $profesor->telefono_1; ?>" placeholder="">
    </div>
  </div> 
  </div> 
  
  <div class="card-footer">
  <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Teléfono 2</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="telefono_2" class="form-control" id="" value="<?php echo $profesor->telefono_2; ?>" placeholder="">
    </div>
  </div> 
  </div> 
  
  <div class="card-footer">
  <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Correo</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text"  name="email" class="form-control" id="" value="<?php echo $profesor->correo; ?>" placeholder="">
    </div>
	</div> 
  </div> 
  
  <div class="card-footer">
  <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombre de Usuario</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text"  name="username" class="form-control" id="" value="<?php echo $profesor->username; ?>" placeholder="">
    </div>
  </div> 
  </div> 
 

 </div>
	</div>
  	<br>
	
		   <div class="col-6">
		   
		     <div class="card card-success">
              <div class="card-header">
            
       
	              <center><i class="fa "><h1>Colegio ENA</h1></i></center>
				</div>
				

				

  
			<div class="image">
		
		        <br>
                <?php if($profesor->image!=""):?>

 
				<center> <img src="storage/profesor/<?php echo $profesor->image;?>" class="img-responsive" style="width:60%"></td> </center>

				<?php endif;?>
				<br>
		         
               </div>
			
				
					</div>
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Referencias</h1></i>
				</div>


	<br>
 
  <div class="card-footer">
  <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombre</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="ref_nombre" class="form-control" id="" value="<?php echo $profesor->ref_nombre; ?>" placeholder="">
    </div>
  </div> 
  </div> 
  
  <div class="card-footer">
  <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Teléfono</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text" name="ref_telefono" class="form-control" id="" value="<?php echo $profesor->ref_telefono; ?>" placeholder="">
    </div>
  </div> 
  </div> 
  
  <div class="card-footer">
  <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Correo</label>
    <div class="col-md-9">
		<fieldset disabled>
      <input type="text"  name="ref_correo" class="form-control" id="" value="<?php echo $profesor->ref_correo; ?>" placeholder="">
    </div>
  </div> 
  </div> 
  </div> 
 
  

 



</div>
 </div>
</form>
	
</div>
</section>

<script>
  $(document).ready(function(){
    $("#product_code").keydown(function(e){
        if(e.which==17 || e.which==74 ){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});

</script>