<?php 

$bim= $_SESSION['bimestre_id'];
$as=$_SESSION['asig_id'];
$examen = ExamenData::getById($_GET["id"]);
foreach($examen as $an){
//print_r($examen);
?>



  
<br> <section class="content">
   <div class="container-fluid">
   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="updateexamendoc" action="index.php?view=updateexamendoc" role="form">
	<div class="row">
	<div class="col-md-12">
	 <div class="card card-success">
      <div class="card-header">
	<center><i class="fa "><h1>Examen </h1></i></center>
	</div>
	</div>

			
	
			 <div class="card ">

	<div class="card-body">
			     <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
					<textarea name="nombre" required class="form-control"  id="nombre" rows="1"><?php echo $an->nombre;?> </textarea>
					<textarea name="descripcion" required class="form-control" id="descripcion" rows="7"> <?php echo $an->descripcion;?></textarea>
					<textarea name="valor" required class="form-control"  id="valor" rows="1"><?php echo $an->valor;?> </textarea>
		</div></div>
		
		<div class="card-footer">
        <div class="row">
        <label for="inputEmail1" class="col-lg-4 control-label">Inicio Registrado*</label>
        <div class="col-md-8">
         <input type="text" name="f_inicio" value="<?php echo $an->f_inicio;?>" class="form-control" id="f_inicio" placeholder="">
        </div>
        </div>
        </div>
		
		 <div class="card-footer">
        <div class="row">
        <label for="inputEmail1" class="col-lg-4 control-label">Tiempo de inicio *</label>
        <div class="col-md-8">
         <input type="datetime-local" name="f_inicio"  required valorue="<?php if(isset($_GET["f_inicio"])){ echo $_GET["f_inicio"]; }?>" class="form-control">
        </div>
        </div>
        </div>
		
		<div class="card-footer">
        <div class="row">
        <label for="inputEmail1" class="col-lg-4 control-label">Cierre Registrado*</label>
        <div class="col-md-8">
         <input type="text" name="f_entrega" value="<?php echo $an->f_entrega;?>" class="form-control" id="f_entrega" placeholder="">
        </div>
        </div>
        </div>
		
		 <div class="card-footer">
        <div class="row">
        <label for="inputEmail1" class="col-lg-4 control-label">Tiempo de cierre*</label>
        <div class="col-md-8">
         <input type="datetime-local" name="f_entrega"  required valorue="<?php if(isset($_GET["f_entrega"])){ echo $_GET["f_entrega"]; }?>" class="form-control">
        </div>
        </div>
        </div>
		</div></div>

						<div class="footer_box_content">
       <div class="cleaner_h10"></div>
      <div class="button_01"><a href="examen/<?php
					      echo $an->documento;?>" target="_blank" > Visualizar exámen registrado</a></div>
						</div>		
	
	<div class="card-footer">
                <div class="row">
				 <label for="inputEmail1" class="col-lg control-label"></label>
                  <div class="col-8">
                     <input type="file" name="documento" id="documento"  placeholder="Seleccionar">
                  </div>

                </div>
              </div>
			  
			  


  
    </div>
  </div>
  
 
 	<div class="col-md-12">
  	 <div class="card card">
	 <div class="card-header">
	 </div>
 <div class="form-group">
    <div class="col-lg-offset-8 col-lg-12">
	
	<input type="hidden" name="id_mat" value="<?php echo $_GET["id"];?>">
      <center><button type="submit" class="btn btn-primary"><h5>Actualizar</h5></button></center>
    </div>
  </div>
  </div>



  
 
  </div>
  	</div>

</form>
</div>
</section>
<?php } ?>



