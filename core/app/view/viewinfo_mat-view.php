<?php
$anuncios = AsignacionAnuncioData::getByIdMatBi($_GET["id"],$_SESSION['bimestre_id']);
?>

<br> <section class="content">
      
  <div class="row">
	
 <div class="col-12">		  
 <div class="card card-warning">
  <div class="card-header">
    
	<a href="index.php?view=view_tareas_alumno&id_mat=<?php echo $_GET["id"]; ?>" class="btn btn-default" ><i  class='fa fa-asterisk'></i> Tareas</a>
	<a href="index.php?view=assistance&team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-check'></i> Material</a>
	<a href="index.php?view=assistance&team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-check'></i> Examenes</a>
</div>
</div>
</div>
</div>
</section>


        <div class="col-md-12">
		<?php

		if(count($anuncios)>0){
			$materia=MateriasData::getById($_GET["id"]);
			
			?>
			<div class="card card">
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
				          <?php if(($prof->image)==NULL){?>
				          
						  <img class="img-circle img-bordered-sm" src="storage/not.jpg" alt="user image">
						<?php } else{?>
							<img class="img-circle img-bordered-sm" src="storage/profesor/<?php echo $prof->image;?>" alt="user image">
						<?php }
						?></div>
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
                          <a class="link-black text-sm">
                            <i class=" mr-1"></i> Colegio ENA
                          </a>
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
