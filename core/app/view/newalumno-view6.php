

<div class="row">
	<div class="col-md-12">
	<h1><p class="text-primary">Nuevo Alumno</p></h1>
	<br>
		<form class="form-horizontal" method="post" id="addalumno" action="index.php?view=addalumno" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombres*</label>
    <div class="col-md-6">
      <input type="text" name="nombres" required class="form-control" id="nombres" placeholder="Nombres">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos" required class="form-control" id="apellidos" placeholder="Apellidos">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo Estudiantil*</label>
    <div class="col-md-6">
      <input type="text" name="codigo" required class="form-control" id="codigo" placeholder="Codigo">
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento*</label>
  <div class="col-md-6">
   <input type="date" name="sd"  required value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
   </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Edad*</label>
    <div class="col-md-6">
      <input type="text" name="edad" required class="form-control" id="edad" placeholder="Edad">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" required class="form-control" id="direccion" placeholder="Dirección">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Alergias*</label>
    <div class="col-md-6">
      <input type="text" name="alergias" required class="form-control" id="Alergias" placeholder="Alergias">
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Medicamento*</label>
    <div class="col-md-6">
      <input type="text" name="medicamento" required class="form-control" id="medicamento" placeholder="Medicamento">
    </div>
  </div>
 
  <h2><p class="text-primary">Información del refargado</p></h2>
	<br>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombres y Apellidos*</label>
    <div class="col-md-6">
      <input type="text" name="ref_nombre" required class="form-control" id="ref_nombre" placeholder="Nombres y Apellidos">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Parentesco*</label>
    <div class="col-md-6">
      <input type="text" name="ref_parentesco" required class="form-control" id="ref_parentesco" placeholder="Parentesco">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">DPI*</label>
    <div class="col-md-6">
      <input type="text" name="ref_dpi" required class="form-control" id="ref_dpi" placeholder="Número de DPI">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="text" name="ref_telefono" required class="form-control" id="ref_telefono" placeholder="Telefono">
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección*</label>
    <div class="col-md-6">
      <input type="text" name="ref_direccion" required class="form-control" id="ref_direccion" placeholder="Direccion">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Correo</label>
    <div class="col-md-6">
      <input type="text" name="ref_correo"  class="form-control" id="ref_correo" placeholder="Correo">
    </div>
  </div>

  

  <p class="alert alert-info">* Campos obligatorios</p>



  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
	<input type="hidden" name="id_grado" value="<?php echo $_GET["id_grado"];?>">
      <button type="submit" class="btn btn-primary">Agregar Alumno</button>
    </div>
  </div>
</form>
	</div>
</div>