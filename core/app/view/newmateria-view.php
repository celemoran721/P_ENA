<?php 
$grados = GradosData::getAll();
//$et =  $grados->getEtapa();
$profesores = PersonaData::getAllProf();
?>
	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-6">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Nueva Materia</h1></i>
				</div>
	<br>
		<form class="form-horizontal" method="post" id="addmateria" action="index.php?view=addmateria" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-8">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-6 control-label">Grado al que Pertenece*</label>
    <div class="col-md-8">
    <select name="id_grado" required class="form-control">
    <option value="">-- Seleccionar --</option>
    <?php foreach($grados as $grado):
	$et =  $grado->getEtapa();?>
      <option value="<?php echo $grado->id;?>"><?php echo $grado->nombre." ".$et->nombre;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div> 
  
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-6 control-label">Profesor designado*</label>
    <div class="col-md-8">
    <select name="id_profesor" required class="form-control">
    <option value="">-- Seleccionar --</option>
    <?php foreach($profesores as $prof):?>
      <option value="<?php echo $prof->id;?>"><?php echo $prof->nombres." ".$prof->apellidos;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div> 
  
 

  <p class="alert alert-warning">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-8 col-lg-12">
      <center><button type="submit" class="btn btn-primary"><h5>Agregar Materia</h5></button></center>
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
          <center><img src="dist/img/ena1.jpg" class="img-circle elevation-2" alt="User Image"></center>
		  <br>
		  <br>
        </div>
				
					</div>
	</div>
	</div>
		</div>

</section>

