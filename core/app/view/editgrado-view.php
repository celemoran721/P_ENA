<?php 

$grado = GradosData::getById($_GET["id"]);
$et =  $grado->getEtapa();
$etapas = EtapasData::getAll();
//$et = EtapasData::getById($_GET["id"]);


?>
	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-6">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Editar Grado</h1></i>
				</div>
	<br>
		<form class="form-horizontal" method="post" id="editgrado" action="index.php?view=updategrado" role="form">

   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-8">
      <input type="text" name="nombre"  required value="<?php echo $grado->nombre;?>" class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Etapa*</label>
    <div class="col-md-8">
    <select name="id_etapa" required class="form-control">
    <option value="">-- NINGUNA --</option>
    <?php foreach($etapas as $etapa):?>
      <option value="<?php echo $etapa->id;?>"><?php echo $etapa->nombre;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-8 control-label">Etapa Registrada*</label>
    <div class="col-md-8">
			<fieldset disabled>
      <input type="text" name="etapa" value="<?php echo $et->nombre;?>" class="form-control" id="etapa" placeholder="Nombre">
    </div>
  </div>
 
  
  
  
  

  <p class="alert alert-warning">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id_grado" value="<?php echo $grado->id;?>">
      <center><button type="submit" class="btn btn-primary"><h5>Actualizar Grado</h5></button></center>
       </div>
  </div>
</form>
	</div>
	</div>
	
	 <div class="col-6">
            <!-- jQuery Knob -->
              <div class="card card-success">
              <div class="card-header">
            
       
	 <center><i class="fa "><h1>Colegio ENA</h1></i></center>
				</div>
				
        <div class="image">
		
		<br>
          <center><img src="dist/img/ena1.jpg" class="img-responsive" style="width:57%"></center>
		  <br>
		  <br>
        </div>
				
					</div>
	</div>
	</div>
		</div>

</section>


