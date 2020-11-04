<?php 

$asig = AsignacionBGMPData::getByIdMa($_GET["id"]);

$grado =  $asig->getGrado();
$materia =  $asig->getMateria();
$profesor =  $asig->getProfesor();
 
$profesores = PersonaData::getAll();
$grados = GradosData::getAll();



?>
	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-6">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Editar Materia</h1></i>
				</div>
	<br>
		<form class="form-horizontal" method="post" id="editmateria" action="index.php?view=updatemateria" role="form">

	  
<div class="card-footer">
    <div class="row">
    <label for="inputcorreo1" class="col-lg-3 control-label">Nombre de la materia</label>
    <div class="col-md-9">
      <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $materia->nombre; ?>" placeholder="">
    </div>
	</div>
  </div> 

   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Grado Registrado</label>
    <div class="col-md-9">
      <input type="text" name="grado" value="<?php echo $grado->nombre;?>" class="form-control" id="grado" placeholder="Grado Registrado">
    </div>
  </div>
  </div>
  
 <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Nuevo Grado*</label>
    <div class="col-md-9">
    <select name="id_grado" required class="form-control">
    <option value="">-- Seleccionar --</option>
    <?php foreach($grados as $grado):?>
      <option value="<?php echo $grado->id;?>"><?php echo $grado->nombre;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div> 
  </div> 

  
    <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Profesor Registrado</label>
    <div class="col-md-9">
      <input type="text" name="profesor" value="<?php echo $profesor->nombres." ". $profesor->apellidos;?>" class="form-control" id="profesor" placeholder="">
    </div>
  </div>
  </div>
  
    <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Nuevo Profesor*</label>
    <div class="col-md-6">
    <select name="id_profesor" required class="form-control">
    <option value="">-- Seleccionar --</option>
    <?php foreach($profesores as $profesor):
	 if (($profesor->rol)==3){ ?>
	 <option value="<?php echo $profesor->id;?>"><?php echo $profesor->nombres." ".$profesor->apellidos;}?></option>
    <?php endforeach;?>
      </select>    </div>
  </div>
</div>  
  


  

  <p class="alert alert-warning">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id_asig" value="<?php echo $asig->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Materia</button>
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

