<?php
$tareas = AsignacionTareaData::getByIdMatBim($_GET["id_mat"],$_SESSION['bimestre_id']);

?>
<br> 


        <div class="col-md-12">
		<?php

		
			$materia=MateriasData::getById($_GET["id_mat"]);
			
			?>
			<div class="card card-warning">
			   <div class="card-header">
		<h1>  <center> Tareas recibidas <?php echo $materia->nombre; ?>  </center></h1>
               
              </div>
			</div>
		</div>		
		<div class="col-md-12">






</div>
			  
			<?php
			$grado = AsignacionBGMPData::getAllByMat($_GET["id_mat"]);
			foreach($grado as $g){
			$alumno = AlumnosGradoData::getAllByGradoId($g->id_grado);
            foreach ($alumno as $al){
			$alum = $al->getAlumnos();	
			foreach($alum as $a){
			//print_r($a);
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
				          <img class="img-circle img-bordered-sm" src="storage/alumno/<?php echo $a->image;?>" alt="user image">
		                </div>
                        <span class="username">
                          <a><?php echo $a->nombres." ".$a->apellidos; ?></a>
                         
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
			<?php  }}}?>



