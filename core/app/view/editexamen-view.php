<?php 

$bim= $_SESSION['bimestre_id'];
$as=$_SESSION['asig_id'];
$examen = ExamenData::getById($_GET["id"]);
foreach($examen as $an){
$asig = AsignacionExamenData::getById($an->id);
//print_r($tarea);
?>
	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-6">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Editar Examen </h1></i>
				</div>
	<br>
		<form class="form-horizontal" method="post" enctype="multipart/form-data" id="editexamen" action="index.php?view=updateexamen" role="form">


  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Nombre*</label>
    <div class="col-md-8">
       <input type="text" name="nombre" required class="form-control" id="nombre" value="<?php echo $an->nombre;?>"placeholder="">
    </div>
  </div>
  </div>
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Indicaciones Generales*</label>
    <div class="col-md-8">
    <textarea name="descripcion" required class="form-control" id="descripcion" rows="8"> <?php echo $an->descripcion;?>
    </textarea>
	</div>
  </div>
  </div>
  
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Valor*</label>
    <div class="col-md-8">
    <input type="text" name="valor" value="<?php echo $an->valor;?>" class="form-control" id="valor" placeholder="">
	</div>
  </div>
  </div>
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Tiempo en minutos*</label>
    <div class="col-md-8">
    <input type="text" name="tiempo" value="<?php echo $an->tiempo;?>" class="form-control" id="tiempo" placeholder="">
	</div>
  </div>
  </div>
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Cantidad de preguntas*</label>
    <div class="col-md-8">
    <input type="text" name="c_preguntas" value="<?php echo $an->c_preguntas;?>" class="form-control" id="c_preguntas" placeholder="">
	</div>
  </div>
  </div>
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Fecha Límite Registrada</label>
    <div class="col-md-8">
      <input type="text" name="fecha" value="<?php echo $an->f_entrega;?>" class="form-control" id="fecha" placeholder="Fecha Registrada">
    </div>
  </div>
  </div>
  
  
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Fecha Límite*</label>
  <div class="col-md-8">
   <input type="date" name="sd"  required value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
   </div>
  </div>
  </div>
 
 <?php
 //foreach ($asig as $a){
	 ?>
   <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label" >Está activo</label>
    <div class="col-md-8">
	<div class="checkbox">
    <label>
 <input type="checkbox" name="estado" <?php if($asig->estado){ echo "checked";}}?>> 
    </label>
  </div>
    </div>
  </div>
  </div>
 
			
            <div class="card card">
			<div class="card-footer">
			<div class="col-lg-offset-8 col-lg-12">
			<input type="hidden" name="id_examen" value="<?php echo $an->id;?>">
			<center><button type="submit" class="btn btn-primary">Actualizar Exámen</button></center>
			</div>
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
          <center><img src="dist/img/ena1.jpg" class="img-circle elevation-2" style="width:71%" alt="User Image"></center>
		  <br>
		  <br>
        </div>
				
					</div>
			
			 
			
			
			
			<p class="alert alert-warning">* Campos obligatorios</p>
  
	</div>
	</div>
		</div>

</section>

