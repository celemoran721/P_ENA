<?php 
$cal = CalificacionCategoriaData::getById($_GET["id_cal"]); 
$mat=$_SESSION['materia_id'];
$bim= $_SESSION['bimestre_id'];
$_SESSION['calificacion_id']=$cal->id ;
print_r($mat);
//print_r($bim);
?>
	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-6">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Nueva/o <?php echo $cal->nombre;?> </h1></i>
				</div>
	<br>
		<form class="form-horizontal" method="post" id="adddescripcalificacion" action="index.php?view=adddescripcalificacion" role="form">


  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Nombre*</label>
    <div class="col-md-8">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  </div>
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Descripción*</label>
    <div class="col-md-8">
	<textarea name="descripcion" required class="form-control" rows="3" id="descripcion" placeholder="Descripcion">
	</textarea>  
    </div>
  </div>
  </div>
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Valor*</label>
    <div class="col-md-8">
      <input type="text" name="val" required class="form-control" id="val" placeholder="Valor">
    </div>
  </div>
  </div>
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Fecha*</label>
    <div class="col-md-8">
      <input type="date" name="sd"  required value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
    </div>
  </div>
  </div>
  
  
  
  
  

  <p class="alert alert-warning">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <center><button type="submit" class="btn btn-primary">Agregar  <?php echo $cal->nombre;?> </button></center>
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

