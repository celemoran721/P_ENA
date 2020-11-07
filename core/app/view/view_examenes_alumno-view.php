<?php
$examen = AsignacionExamenData::getByIdMatBim($_GET["id_mat"],$_SESSION['bimestre_id']);
?>

<br> <section class="content">
      
  <div class="row">
	
 <div class="col-12">		  
 <div class="card card-warning">
  <div class="card-header">
    
	
</div>
</div>
</div>
</div>
</section>


        <div class="col-md-12">
		<?php

		if(count($examen)>0){
			$materia=MateriasData::getById($_GET["id_mat"]);
			
			?>
			<div class="card card-warning">
			   <div class="card-header">
		<h1>  <center>Exámenes de <?php echo $materia->nombre; ?>  </center></h1>
               <div class="card-tools">
				
               </div>
              </div>
			</div>
		</div>		
		<div class="col-md-12">

<?php
		}else{
			echo "<p class='alert alert-danger'>No hay exámenes para ser visualizados</p>";
}
?>




</div>
		  <?php
foreach($examen as $anu){
$mat = $anu->getMateria();
$prof = $anu->getProfesor();

$contenido = ExamenData::getById($anu->id_examen);
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
                       <?php echo $con->nombre; ?>
                      </p>
                      <p>Valor:
                        <?php echo $con->valor; ?>
                      </p>
					  
					   <p> Tiempo de inicio:
                        <?php echo $con->f_inicio; ?>
                      </p>
					  
					  <p> Tiempo de cierre:
                        <?php echo $con->f_entrega; ?>
                      </p>
					  

						<span class="float-right">
                          <a href="index.php?view=entrega_examen&id=<?php echo $anu->id; ?>" class="link-blue text-sm">
                            <i class=" mr-1"></i> Realizar exámen
                          </a>
                        </span>
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
