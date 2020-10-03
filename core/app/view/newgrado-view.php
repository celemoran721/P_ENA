

<?php 
$etapas = EtapasData::getAll();
$bimestres = BimestresData::getAll();
?>
	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-6">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Nuevo Grado</h1></i>
				</div>
	<br>
		<form class="form-horizontal" method="post" id="addmateria" action="index.php?view=addgrado" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-8">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  
  
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Etapa*</label>
    <div class="col-md-8">
    <select name="id_etapa" required class="form-control">
    <option value="">-- NINGUNO --</option>
    <?php foreach($etapas as $etapa):?>
      <option value="<?php echo $etapa->id;?>"><?php echo $etapa->nombre;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div>  
  
 
   <br>
  <p class="alert alert-warning">* Campos obligatorios</p>
  
  <br>
  <div class="form-group">
    <div class="col-lg-offset-8 col-lg-12">
      <center><button type="submit" class="btn btn-primary"><h5>Agregar Grado</h5></button></center>
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


