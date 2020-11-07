<?php
$examenes = AsignacionExamenData::getByIdMatBim($_GET["id_mat"],$_SESSION['bimestre_id']);
//print_r($examenes); 
?>
<br> 


        <div class="col-md-12">
		<?php

		
			$materia=MateriasData::getById($_GET["id_mat"]);
			//print_r($materia);
			
			?>
			<div class="card card-warning">
			   <div class="card-header">
		<h1>   Examenes de <?php echo $materia->nombre; ?> </h1>
               <div class="card-tools">
							   <?php
			   //foreach ($materia as $a){
			   
			?>
			<a href="index.php?view=newexamen&id_mat=<?php echo $materia->id;?>" class="btn btn-default text-dark"><i class='fa fa-folder-open-o '></i> Nuevo exámen-selección</a>
              <a href="index.php?view=newexamendoc&id_mat=<?php echo $materia->id;?>" class="btn btn-default text-dark"><i class='fa fa-folder-open-o '></i> Nuevo exámen-documento</a>
              
               </div>
              </div>
			</div>
		</div>		
		<div class="col-md-12">

<?php

		//}else{
			//echo "<p class='alert alert-danger'>No hay examenes para ser visualizadas</p>";
//}
?>




</div>
			  
			<?php
			if(count($examenes)>0){
			foreach($examenes as $ta){
				$mat = $ta->getMateria();
			$prof = $ta->getProfesor();
			$t = ExamenData::getById($ta->id_examen); 
			foreach($t as $exa){
			//print_r($anu);
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
                        <span class="description"><?php echo $exa->creacion; ?></span>
                      </div>
                      <!-- /.user-block -->
					  <p>
                       <?php echo $exa->nombre; ?>
                      </p>
                      <p>
                        <?php echo $exa->descripcion; ?>
                      </p>

                      <p>
                        <span class="float-right">
						
						<?php if(isset($exa->c_preguntas)){  ?>
                          <a  href="index.php?view=editexamen&id=<?php echo $exa->id;?>" class="btn btn-warning btn-sm"><small>Editar</small></a>
			            <?php }else{ ?> 
							<a  href="index.php?view=editexamendoc&id=<?php echo $exa->id;?>" class="btn btn-warning btn-sm"><small>Editar</small></a>
						<?php } ?>
						
						
							<?php if(isset($exa->c_preguntas)){  ?>
							<a href="index.php?view=preguntas&id=<?php echo $exa->id; ?>" class="link-blue text-sm">
							<i class=" mr-1"></i> Agregar preguntas
                          </a>
							<?php }else{ ?>
							
							<div class="footer_box_content">
                            <div class="cleaner_h10"></div>
                            <div class="button_01"><a href="examen/<?php
					      echo $exa->documento;?>" target="_blank" >  Descargar Archivo</a></div>
						</div>
							
							<?php } ?>
							
                      </p>
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
<?php }}

}else{
			echo "<p class='alert alert-danger'>No hay examenes para ser visualizados</p>";
} ?>



