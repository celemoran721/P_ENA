<?php
$tareas = AsignacionTareaData::getByIdMatBim($_GET["id_mat"],$_SESSION['bimestre_id']); 
?>
<br> 


        <div class="col-md-12">
		<?php

		if(count($tareas)>0){
			$materia=MateriasData::getById($_GET["id_mat"]);
			
			?>
			<div class="card card-warning">
			   <div class="card-header">
		<h1>  <center> Tareas de <?php echo $materia->nombre; ?>  </center></h1>
               <div class="card-tools">
							   <?php
			   foreach ($tareas as $a){
			   }
			?>
			<a href="index.php?view=newtarea&id_mat=<?php echo $a->id_materia;?>" class="btn btn-default text-dark"><i class='fa fa-user'></i> Nueva tarea</a>
              
               </div>
              </div>
			</div>
		</div>		
		<div class="col-md-12">

<?php
		}else{
			echo "<p class='alert alert-danger'>No hay tareas para ser visualizadas</p>";
}
?>




</div>
			  
			<?php
			foreach($tareas as $ta){
				$mat = $ta->getMateria();
			$prof = $ta->getProfesor();
			$t = TareaData::getById($ta->id_tarea); 
			foreach($t as $tare){
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
				          <img class="img-circle img-bordered-sm" src="storage/profesor/<?php echo $prof->image;?>" alt="user image">
		                </div>
                        <span class="username">
                          <a><?php echo $prof->nombres; ?></a>
                         
                        </span>
                        <span class="description"><?php echo $tare->creacion; ?></span>
                      </div>
                      <!-- /.user-block -->
					  <p>
                       <?php echo $tare->nombre; ?>
                      </p>
                      <p>
                        <?php echo $tare->descripcion; ?>
                      </p>

                      <p>
                        <span class="float-right">
                          <a  href="index.php?view=edittarea&id=<?php echo $tare->id;?>" class="btn btn-warning btn-sm"><small>Editar</small></a>
			                <a href="index.php?view=deltarea&id=<?php echo $tare->id;?>" class="btn btn-danger btn-sm"><small>Eliminar</small></a>
            
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



