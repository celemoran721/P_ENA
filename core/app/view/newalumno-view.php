<?php
$padres = PersonaData::getAllPadre();
?>

<br> <section class="content">
   <div class="container-fluid">
   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addpadre" action="index.php?view=addalumno" role="form">
	<div class="row">
	<div class="col-md-6">
	 <div class="card card-info">
      <div class="card-header">
	 <i class="fa "><h1>Nuevo Alumno</h1></i>
	</div>
	
	<div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Imagen*</label>
                  <div class="col-9">
                     <input type="file" name="image" id="image" placeholder="">
                  </div>

                </div>
              </div>

  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombres*</label>
    <div class="col-md-9">
      <input type="text" name="nombres" required class="form-control" id="nombres" placeholder="Nombres">
    </div>
  </div>
  </div>
  
  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Apellidos*</label>
    <div class="col-md-9">
      <input type="text" name="apellidos" required class="form-control" id="apellidos" placeholder="Apellidos">
    </div>
  </div>
  </div>
  
  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Codigo Estudiantil*</label>
    <div class="col-md-9">
      <input type="text" name="codigo" required class="form-control" id="codigo" placeholder="Codigo">
    </div>
  </div>
  </div>
  
  
  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Fecha de Nacimiento*</label>
  <div class="col-md-9">
   <input type="date" name="sd"  required value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
   </div>
  </div>
  </div>

  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Edad*</label>
    <div class="col-md-9">
      <input type="text" name="edad" required class="form-control" id="edad" placeholder="Edad">
    </div>
  </div>
  </div>

  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Dirección*</label>
    <div class="col-md-9">
      <input type="text" name="direccion" required class="form-control" id="direccion" placeholder="Dirección">
    </div>
  </div>
  </div>
  
  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Alergias</label>
    <div class="col-md-9">
      <input type="text" name="alergias" class="form-control" id="Alergias" placeholder="Alergias">
    </div>
  </div>
  </div>
  
  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Medicamento</label>
    <div class="col-md-9">
      <input type="text" name="medicamento" class="form-control" id="medicamento" placeholder="Medicamento">
    </div>
  </div>
  </div>
  
    </div>
	<p class="alert alert-warning">* Campos obligatorios</p>
  </div>
  
 
 	<div class="col-md-6">
	
	              <div class="card card-success">
              <div class="card-header">
            
       
	 <center><i class="fa "><h1>Colegio ENA</h1></i></center>
				</div>
				
        <div class="image">
		
		<br>
          <center><img src="dist/img/ena1.jpg" class="img-circle elevation-2" style="width:60%"alt="User Image"></center>
		  <br>

        </div>
				
					</div>
	
	 <div class="card card-info">
      <div class="card-header">
	 <i class="fa "><h1>Información del Encargado</h1></i>
	</div>
 
  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Encargado*</label>
    <div class="col-md-9">
    <select name="id_padre" required class="form-control">
    <option value="">-- Seleccionar --</option>
    <?php foreach($padres as $padre):?>
      <option value="<?php echo $padre->id;?>"><?php echo $padre->ref_nombre;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div> 
    </div> 

  
  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Parentesco*</label>
    <div class="col-md-9">
      <input type="text" name="ref_parentesco" required class="form-control" id="ref_parentesco" placeholder="Parentesco">
    </div>
  </div>
   </div>
  

       </div>

  	 <div class="card card">
	 <div class="card-header">
	 </div>
 <div class="form-group">
    <div class="col-lg-offset-8 col-lg-12">
	<input type="hidden" name="id_grado" value="<?php echo $_GET["id_grado"];?>">
      <center><button type="submit" class="btn btn-primary"><h5>Agregar Alumno</h5></button></center>
    </div>
  </div>
  </div>



  
 
  </div>
  	</div>

</form>
</div>
</section>