<?php 

$alumno = AlumnosData::getById($_GET["id"]);

?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Alumno</h1>
	<br>
		<form class="form-horizontal" method="post" id="editalumno" action="index.php?view=updatealumno" role="form">


   <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombres</label>
    <div class="col-md-6">
      <input type="text" name="nombres" class="form-control" id="nombres" value="<?php echo $alumno->nombres; ?>" placeholder="">
    </div>
  </div> 
  
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Apellidos</label>
    <div class="col-md-6">
      <input type="text" name="apellidos" class="form-control" id="apellidos" value="<?php echo $alumno->apellidos; ?>" placeholder="">
    </div>
  </div> 
  
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Código estudiantil</label>
    <div class="col-md-6">
      <input type="text" name="codigo"  class="form-control" id="codigo" value="<?php echo $alumno->codigo; ?>" placeholder="">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Fecha de Nacimiento*</label>
  <div class="col-md-6">
   <input type="date" name="sd"  required value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
   </div>
  </div>
   
  
 <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Edad</label>
    <div class="col-md-6">
      <input type="text" name="edad" class="form-control" id="edad" value="<?php echo $alumno->edad; ?>" placeholder="">
    </div>
  </div> 
 
 <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Dirección</label>
    <div class="col-md-6">
      <input type="text" name="direccion"  class="form-control" id="direccion" value="<?php echo $alumno->direccion; ?>" placeholder="">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Alergias</label>
    <div class="col-md-6">
      <input type="text" name="alergias" class="form-control" id="" value="<?php echo $alumno->alergias; ?>" placeholder="">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Medicamento</label>
    <div class="col-md-6">
      <input type="text" name="medicamento" class="form-control" id="" value="<?php echo $alumno->medicamento; ?>" placeholder="">
    </div>
  </div> 
  
 
 
 <h2> Encargado </h2>
 
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombre</label>
    <div class="col-md-6">
      <input type="text" name="enc_nombre" class="form-control" id="" value="<?php echo $alumno->enc_nombre; ?>" placeholder="">
    </div>
  </div>

<div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Parentesco</label>
    <div class="col-md-6">
      <input type="text" name="enc_parentesco" class="form-control" id="" value="<?php echo $alumno->enc_parentesco; ?>" placeholder="">
    </div>
  </div> 

 <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Número de DPI</label>
    <div class="col-md-6">
      <input type="text"  name="enc_dpi" class="form-control" id="" value="<?php echo $alumno->enc_dpi; ?>" placeholder="">
    </div>
  </div>   
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Teléfono</label>
    <div class="col-md-6">
      <input type="text" name="enc_telefono" class="form-control" id="" value="<?php echo $alumno->enc_telefono; ?>" placeholder="">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Dirección</label>
    <div class="col-md-6">
      <input type="text" name="enc_direccion" class="form-control" id="" value="<?php echo $alumno->enc_direccion; ?>" placeholder="">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Correo</label>
    <div class="col-md-6">
      <input type="text"  name="enc_correo" class="form-control" id="" value="<?php echo $alumno->enc_correo; ?>" placeholder="">
    </div>
  </div> 
 
  

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id_alumno" value="<?php echo $alumno->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar alumno</button>
    </div>
  </div>
</form>
	</div>
</div>