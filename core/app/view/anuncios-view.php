

<?php
$anuncios = AsignacionAnuncioData::getByIdMatBi($_GET["id_mat"],$_SESSION['bimestre_id']);
//foreach ($anuncios as $a){
?>

<br> 


        <div class="col-md-12">
		<?php

		
			$materia=MateriasData::getById($_GET["id_mat"]);
			
			?>
			<div class="card card-warning">
			   <div class="card-header">
		<h1>  <center> Anuncios de <?php echo $materia->nombre; ?>  </center></h1>
               <div class="card-tools">
			   <?php
			  
			   
			?>
			   <a href="index.php?view=newanuncio&id_mat=<?php echo $_GET["id_mat"] ?>" class="btn btn-default text-dark"><i class='fa fa-comment'></i> Nuevo Anuncio</a>
			   </div>
              </div>
			</div>
		</div>		
		<div class="col-md-12">

<?php

?>




</div>
		  <?php
		  if(count($anuncios>0)){
foreach($anuncios as $anu){
$mat = $anu->getMateria();
$prof = $anu->getProfesor();

$contenido = AnuncioData::getById($anu->id_anuncio);
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

                      <p>
                        <span class="float-right">
                          <a  href="index.php?view=editanuncio&id=<?php echo $con->id;?>" class="btn btn-warning btn-sm"><small>Editar</small></a>
			                <a href="index.php?view=delanuncio&id=<?php echo $con->id;?>" class="btn btn-danger btn-sm"><small>Eliminar</small></a>
            
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
		  <?php }} }
		  else {
			  echo "<p class='alert alert-danger'>No hay Anuncios creados </p>";
}?>
