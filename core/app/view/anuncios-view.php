

<?php
$anuncios = AsignacionAnuncioData::getByIdMatBi($_GET["id_mat"],$_SESSION['bimestre_id']);
?>

<br> 


        <div class="col-md-12">
		<?php

		if(count($anuncios)>0){
			$materia=MateriasData::getById($_GET["id_mat"]);
			
			?>
			<div class="card card-warning">
			   <div class="card-header">
		<h1>  <center> Anuncios de <?php echo $materia->nombre; ?>  </center></h1>
               <div class="card-tools">
				
               </div>
              </div>
			</div>
		</div>		
		<div class="col-md-12">

<?php
		}else{
			echo "<p class='alert alert-danger'>No hay anuncios para ser visualizados</p>";
}
?>




</div>
		  <?php
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
				          <img class="img-circle img-bordered-sm" src="storage/profesor/<?php echo $prof->image;?>" alt="user image">
		                </div>
                        <span class="username">
                          <a><?php echo $prof->nombres; ?></a>
                         
                        </span>
                        <span class="description"><?php echo $con->creacion; ?></span>
                      </div>
                      <!-- /.user-block -->
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
<?php }} ?>
