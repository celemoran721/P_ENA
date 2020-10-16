<?php

?>

<br> <section class="content">
   <div class="container-fluid">
   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addpregunta" action="index.php?view=addpregunta" role="form">
	<div class="row">
	<div class="col-md-6">
	 <div class="card card-info">
      <div class="card-header">
	 <i class="fa "><h1>Nueva pregunta</h1></i>
	</div>
	
	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Pregunta/       enunciado*</label>
    <div class="col-md-9">
	<textarea name="pregunta" required class="form-control" rows="7" id="pregunta" placeholder="Pregunta">
	</textarea>  
    </div>
  </div>
  </div>

  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Opción 1*</label>
    <div class="col-md-9">
      <input type="text" name="r_1" required class="form-control" id="r_1" placeholder="Opción 1">
    </div>
  </div>
  </div>
  
    	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Opción 2*</label>
    <div class="col-md-9">
      <input type="text" name="r_2" required class="form-control" id="r_2" placeholder="Opción 2">
    </div>
  </div>
  </div>
  
    	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Opción 3*</label>
    <div class="col-md-9">
      <input type="text" name="r_3" required class="form-control" id="r_3" placeholder="Opción 3">
    </div>
  </div>
  </div>
  
    	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Opción 4*</label>
    <div class="col-md-9">
      <input type="text" name="r_4" required class="form-control" id="r_4" placeholder="Opción 4">
    </div>
  </div>
  </div>
  
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Opción 5*</label>
    <div class="col-md-9">
      <input type="text" name="r_5" required class="form-control" id="r_5" placeholder="Opción 5">
    </div>
  </div>
  </div>
  
  <div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Valor*</label>
    <div class="col-md-9">
      <input type="number" name="valor" required class="form-control" id="valor" placeholder="Valor">
    </div>
  </div>
  </div>
  
    </div>
	<p class="alert alert-warning">* Campos obligatorios</p>
  </div>
  
 
 	<div class="col-md-6">
	
	              <div class="card card-success">
              <div class="card-header">
            
       
	 <center><i class="fa "><h1>Colegio ENA</h1></i></center>
				</div>
				
        <div class="image">
		
		<br>
          <center><img src="dist/img/ena1.jpg" class="img-circle elevation-2" style="width:65%"alt="User Image"></center>
		  <br>

        </div>
				
					</div>
	
	 <div class="card card-info">
 
  	<div class="card-footer">
    <div class="row">
    <label for="inputEmail1" class="col-lg-3 control-label">Respuesta Correcta*</label>
    <div class="col-md-9">
    <span class="name"></span>
          <select name="correcta">
          <option value="1">Opción 1</option>
          <option value="2">Opción 2</option>
          <option value="3">Opción 3</option>
          <option value="4">Opción 4</option>
          <option value="5">Opción 5</option>
          </select>    </div>
  </div> 
    </div> 

  
  

       </div>

  	 <div class="card card">
	 <div class="card-header">
	 </div>
 <div class="form-group">
    <div class="col-lg-offset-8 col-lg-12">
	<input type="hidden" name="id_ex" value="<?php echo $_GET["id_ex"];?>">
      <center><button type="submit" class="btn btn-primary"><h5>Guardar Respuesta</h5></button></center>
    </div>
  </div>
  </div>



  
 
  </div>
  	</div>

</form>
</div>
</section>