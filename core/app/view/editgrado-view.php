<?php 

$grado = GradosData::getById($_GET["id"]);
$etapa =  $grado->getEtapa();
$etapas = EtapasData::getAll();


?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar grado</h1>
	<br>
		<form class="form-horizontal" method="post" id="editgrado" action="index.php?view=updategrado" role="form">

   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre"  required value="<?php echo $grado->nombre;?>" class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Etapa*</label>
    <div class="col-md-6">
    <select name="id_etapa" required class="form-control">
    <option value="">-- NINGUNA --</option>
    <?php foreach($etapas as $etapa):?>
      <option value="<?php echo $etapa->id;?>"><?php echo $etapa->nombre;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div> 
  
  

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id_grado" value="<?php echo $grado->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar grado</button>
    </div>
  </div>
</form>
	</div>
</div>