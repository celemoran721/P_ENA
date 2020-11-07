<?php 
$roles = RolesData::getAll();
?>
<br> <section class="content">
   <div class="container-fluid">
   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addprofesor" action="index.php?view=addprofesor" role="form">
	<div class="row">
	<div class="col-md-6">
	 <div class="card card-info">
      <div class="card-header">
	 <i class="fa "><h1>Nuevo Profesor</h1></i>
	</div>
	
	<div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Imagen*</label>
                  <div class="col-9">
                     <input type="file" name="image" id="image" placeholder="">
                  </div>

                </div>
              </div>
		 





              <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Nombres*</label>
                  <div class="col-9">
                     <input type="text" name="nombres" required class="form-control" id="nombres" placeholder="Nombres">
                  </div>

                </div>
              </div>
			  
			  <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Apellidos*</label>
                  <div class="col-9">
                     <input type="text" name="apellidos" required class="form-control" id="apellidos" placeholder="Apellidos">
                  </div>

                </div>
              </div>
			  
			   <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">DPI*</label>
                  <div class="col-9">
                     <input type="text" name="dpi"  class="form-control" id="dpi" placeholder="DPI">
                  </div>

                </div>
              </div>
			  
			  <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Profesión*</label>
                  <div class="col-9">
                     <input type="text" name="profesion"  class="form-control" id="profesion" placeholder="Profesión">
                  </div>

                </div>
              </div>
			  
			  
			  	<div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Rol del Profesor*</label>
                  <div class="col-9">
                     <select name="id_rol"  class="form-control">
						<option value="">-- NINGUNO --</option>
							<?php foreach($roles as $rol):?>
								<option value="<?php echo $rol->id;?>"><?php echo $rol->nombre;?></option>
							<?php endforeach;?>
					  </select>
                  </div>

                </div>
              </div>

			<div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Fecha de Nacimiento*</label>
                  <div class="col-9">
                    <input type="date" name="sd"   value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
                  </div>

                </div>
              </div>
			  
			  
			
			  
			 <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Dirección*</label>
                  <div class="col-9">
                   <input type="text" name="direccion"  class="form-control" id="direccion" placeholder="Dirección">
                  </div>

                </div>
              </div>
			  
			  <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Telefono 1*</label>
                  <div class="col-9">
                   <input type="text" name="telefono_1" class="form-control" id="telefono_1" placeholder="Teléfono">
                  </div>

                </div>
              </div>
			  
			  <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Telefono 2</label>
                  <div class="col-9">
                   <input type="text" name="telefono_2" class="form-control" id="telefono_2" placeholder="Teléfono">
                  </div>

                </div>
              </div>
			
			  <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Correo*</label>
                  <div class="col-9">
                   <input type="text" name="correo" class="form-control" id="correo" placeholder="Correo">
                  </div>

                </div>
              </div>


			  <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Nombre de Usuario*</label>
                  <div class="col-9">
                   <input type="text" name="username" class="form-control" id="username" placeholder="Nombre de Usuario">
                  </div>

                </div>
              </div>

			  <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Password*</label>
                  <div class="col-9">
                   <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                  </div>

                </div>
              </div>	

			  

 

	</div>
	</div>
  	<br>
	
		   <div class="col-6">
		   
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
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
       
	 <i class="fa "><h1>Referencias</h1></i>
				</div>


	<br>
	
			 <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Nombre Completo*</label>
                  <div class="col-9">
                   <input type="text" name="ref_nombre" class="form-control" id="ref_nombre" placeholder="Nombres y Apellidos">
                  </div>

                </div>
              </div>
			  
			  <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Telefono*</label>
                  <div class="col-9">
                   <input type="text" name="ref_telefono" class="form-control" id="ref_telefono" placeholder="Telefono">
                  </div>

                </div>
              </div>
			  
			  
			  <div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg-3 control-label">Correo</label>
                  <div class="col-9">
                   <input type="text" name="ref_correo"  class="form-control" id="ref_correo" placeholder="Correo">
                  </div>

                </div>
              </div>

  
  
</div>
  <p class="alert alert-warning">* Campos obligatorios</p>



	


	

	 <div class="card card">
	 <div class="card-header">
	 </div>
 <div class="form-group">
    <div class="col-lg-offset-8 col-lg-12">
      <center><button type="submit" class="btn btn-primary"><h5>Agregar Profesor</h5></button></center>
    </div>
  </div>
  </div>
  
              
  
</div>
</div>
</form>

</div>
</section>

<script>
  $(document).ready(function(){
    $("#product_code").keydown(function(e){
        if(e.which==17 || e.which==74 ){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});

</script>