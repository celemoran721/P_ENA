<?php 

$bim= $_SESSION['bimestre_id'];
$as=$_SESSION['asig_id'];

?>
	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-6">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Nuevo Anuncio </h1></i>
				</div>
	<br>
		<form class="form-horizontal" method="post" id="addanuncio" action="index.php?view=addanuncio" role="form">


  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Título*</label>
    <div class="col-md-8">
      <input type="text" name="titulo" required class="form-control" id="titulo" placeholder="Título">
    </div>
  </div>
  </div>
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Descripción*</label>
    <div class="col-md-8">
	<textarea name="descripcion" required class="form-control" rows="8" id="descripcion" placeholder="Descripcion">
	</textarea>  
    </div>
  </div>
  </div>
 
  

  <p class="alert alert-warning">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
	<input type="hidden" name="id_mat" value="<?php echo $_GET["id_mat"];?>">
      <center><button type="submit" class="btn btn-primary">Crear Anuncio </button></center>
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
	</div>
	</div>
		</div>

</section>

