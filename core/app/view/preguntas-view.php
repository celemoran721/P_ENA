<?php
$preguntas = AsignacionPreguntasData::getByIdEx($_GET["id"]); 
?>
<br> 


        <div class="col-md-12">
		<?php

		
			$examen=ExamenData::getById($_GET["id"]);
			foreach($examen as $ex){
			//print_r($ex);
			
			
			?>
			<div class="card card-warning">
			   <div class="card-header">
			<h1>  <center> Preguntas del exámen:  <?php echo $ex->nombre;} ?>  </center></h1>
               <div class="card-tools">
			   <?php
				$id = AsignacionExamenData::getByIdEx($_GET["id"]);
				//foreach ($id as $i){
				//print_r($i); 
				?>
			   
				<a href="index.php?view=newpregunta&id_ex=<?php echo $id->id;?>" class="btn btn-default text-dark"><i class='fa fa-folder-open-o '></i> Crear pregunta</a>
              
			
               </div>
              </div>
			</div>
		</div>		
		<div class="col-md-12">

<?php

		//}else{
			//echo "<p class='alert alert-danger'>No hay premenes para ser visualizadas</p>";
//}
?>




</div>
			  
			<?php
			if(count($preguntas)>0){
			foreach($preguntas as $ta){
				$mat = $ta->getPregunta();
			$prof = $ta->getProfesor();
			$t = PreguntasData::getById($ta->id_pregunta); 
			foreach($t as $pre){
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
                        <span class="description"><?php echo $pre->creacion; ?></span>
                      </div>
                      <!-- /.user-block -->
					  <p>
                       <?php echo $pre->pregunta; ?>
                      </p>
                      <p>
                        <?php //echo $pre->descripcion; ?>
                      </p>

                      <p>
                        <span class="float-right">
                          <a  href="index.php?view=editpregunta&id=<?php echo $pre->id;?>" class="btn btn-warning btn-sm"><small>Editar</small></a>
			                                    
                          
                            <i class=" mr-1"></i> Agregar preguntas
                          </a>
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
			echo "<p class='alert alert-danger'>No hay preguntas creadas!</p>";
} ?>



