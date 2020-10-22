<?php
$material = AsignacionMaterialData::getByIdMatBi($_GET["id_mat"],$_SESSION['bimestre_id']);
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

		if(count($material)>0){
			$materia=MateriasData::getById($_GET["id_mat"]);
			
			?>
			<div class="card card-warning">
			   <div class="card-header">
		<h1>  <center> Material de aprendizaje de <?php echo $materia->nombre; ?>  </center></h1>
               <div class="card-tools">
				
               </div>
              </div>
			</div>
		</div>		
		<div class="col-md-12">

<?php
		}else{
			echo "<p class='alert alert-danger'>No hay material de aprendizaje para ser visualizado</p>";
}
?>




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

						<a href="material/<?php
					   echo $con->documento; ?>" target="_blank">Descargar archivo</a>
						
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
