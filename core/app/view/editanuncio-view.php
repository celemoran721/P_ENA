<?php 

$bim= $_SESSION['bimestre_id'];
$as=$_SESSION['asig_id'];
$anuncio = AnuncioData::getById($_GET["id"]);
foreach($anuncio as $an){
//print_r($anuncio);
?>
	  <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-6">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Editar Anuncio </h1></i>
				</div>
	<br>
		<form class="form-horizontal" method="post" enctype="multipart/form-data" id="editanuncio" action="index.php?view=updateanuncio" role="form">


  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Título*</label>
    <div class="col-md-8">
       <input type="text" name="titulo" required class="form-control" id="titulo" value="<?php echo $an->titulo;?>"placeholder="Titulo">
    </div>
  </div>
  </div>
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-4 control-label">Descripción*</label>
    <div class="col-md-8">
    <textarea name="descripcion" required class="form-control" id="descripcion" rows="7"> <?php echo $an->descripcion;?>
    </textarea>
	</div>
  </div>
  </div>
 
  

  <p class="alert alert-warning">* Campos obligatorios</p>

  <div class="card card">

 <div class="card-footer">
    <div class="col-lg-offset-8 col-lg-12">
<input type="hidden" name="id_anuncio" value="<?php echo $an->id;}?>">
      <center><button type="submit" class="btn btn-primary">Actualizar Anuncio</button></center>
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
	</div>
	</div>
		</div>

</section>

