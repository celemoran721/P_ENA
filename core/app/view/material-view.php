

<?php
//print_r($_GET["id_mat"]);
$material = AsignacionMaterialData::getByIdMatBi($_GET["id_mat"],$_SESSION['bimestre_id']);

?>

<br> 


        <div class="col-md-12">
		<?php

		
			$materia=MateriasData::getById($_GET["id_mat"]);
			
			?>
			<div class="card card-warning">
			   <div class="card-header">
		<h1>  <center> Material de aprendizaje de <?php echo $materia->nombre; ?>  </center></h1>
               <div class="card-tools">
				<a  href="index.php?view=newmaterial&id_mat=<?php echo $_GET["id_mat"]; ?>" class="btn btn-default" ><i  class='fa fa-asterisk'></i> Nuevo Material</a>
	
			  
			   </div>
              </div>
			</div>
		</div>		
		<div class="col-md-12">






</div>
		  <?php
foreach($material as $anu){
$mat = $anu->getMateria();
$prof = $anu->getProfesor();

$contenido = MaterialData::getById($anu->id_material);
			foreach($contenido as $con){
				
				
			?>

    <section class="content">
      <div class="container-fluid">
	  
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                     <div class="post">
                      <div class="user-block">
                        <div class="image">
				          <?php if(($prof->image)==NULL){?>
				          
						  <img class="img-circle img-bordered-sm" src="storage/not.jpg" alt="user image">
						<?php } else{?>
							<img class="img-circle img-bordered-sm" src="storage/profesor/<?php echo $prof->image;?>" alt="user image">
						<?php }
						?>
		                </div>
                        <span class="username">
                          <a><?php echo $prof->nombres; ?></a>
                         
                        </span>
                        <span class="description"><?php echo $con->creacion; ?></span>
                      </div>
                      <!-- /.user-block -->
					  <p>
                       <?php echo $con->titulo; ?>
                      </p>
                      <p>
                        <?php echo $con->descripcion; ?>
                      </p>

						
						<div class="footer_box_content">
       <div class="cleaner_h10"></div>
      <div class="button_01"><a href="material/<?php
					      echo $con->documento;?>" target="_blank" > Descargar Archivo</a></div>
						</div>



                      <p>
                        <span class="float-right">
                          <a  href="index.php?view=editmaterial&id=<?php echo $con->id;?>" class="btn btn-warning btn-sm"><small>Editar</small></a>
			                <a href="index.php?view=delmaterial&id=<?php echo $con->id;?>" class="btn btn-danger btn-sm"><small>Eliminar</small></a>
            
                        </span>
                      </p>
                    </div>
              </div>
             
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
<?php }} ?>
