<?php 

$bim= $_SESSION['bimestre_id'];
$tarea = TareaData::getById($_GET["id"]);
//$_SESSION['tarea_id']=$tarea->id ;

//print_r($tarea);
?>
<br> <section class="content">
   <div class="container-fluid">
   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addentrega_tarea" action="index.php?view=addentrega_tarea" role="form">
	<div class="row">
	<div class="col-md-12">
	 <div class="card card-info">
      <div class="card-header">
	 <i class="fa "><h1>Entregar tarea</h1></i>
	</div>
	
	<div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Imagen*</label>
                  <div class="col-9">
                     <input type="file" name="documento" id="documento" placeholder="Seleccionar">
                  </div>

                </div>
              </div>


  
    </div>
	<p class="alert alert-warning">* Campos obligatorios</p>
  </div>
  
 
 	<div class="col-md-12">
  	 <div class="card card">
	 <div class="card-header">
	 </div>
 <div class="form-group">
    <div class="col-lg-offset-8 col-lg-12">
	<input type="hidden" name="id_grado" value="<?php echo $_GET["id"];?>">
      <center><button type="submit" class="btn btn-primary"><h5>Agregar Alumno</h5></button></center>
    </div>
  </div>
  </div>



  
 
  </div>
  	</div>

</form>
</div>
</section>
            



