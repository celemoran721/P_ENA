	 <?php
	
	 $asig = AsignacionExamenData::getByIdMatBim($_GET["id_mat"],$_SESSION['bimestre_id']);
	 $mat = MateriasData::getById($_GET["id_mat"]);
	
	
	 $res="0";
     ?>
	 <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-info">
              <div class="card-header">
            
                 
                  <i class="fa "><h2><p class="text">Notas de examens de la Materia: <?php echo $mat->nombre?> </p> </h2></i>
         

				
              </div>
			  </div>
			  </div>
		
<br>

			
			
  	          <div class="col-12">
            <!-- jQuery Knob -->
              <div class="card card-warning">
              <div class="card-header">

				</div>
				

				
			<table class="table table-bordered table-hover table-striped "> 
			<thead>
			<th>Examen</th>
			<th>Nota</th>
			<th>Comentario</th>
			<th></th>
			
			
			
			</thead>
			
					 <?php
			foreach($asig as $a){	 
	       
		   $examen = ExamenData::getById($a->id_examen);
			foreach ($examen as $t){
		     if(count($t)>0){
			
			
		?>

			<tr>
				<td style="width:300px;"><?php echo $t->nombre; ?></td>
				
				<?php 
				$entrega = EntregaExamenData::getTodosEx($a->id,$_SESSION['persona_id']);
				foreach($entrega as $en){
				$nota = NotaExamenData::getTodosNota($en->id);
				foreach($nota as $n){
				print_R($n);
				
					
		         ?>
		   <?php
				if(isset($n)){ 
				?>
				<td style="width:300px;"><?php echo $n->nota; ?></td>
			<?php
				
				?>
				<td style="width:300px;"><?php echo $n->comentario; ?></td>
				
				<td style="width:300px;">
				<?php 
				echo "Entregada";
				?></td>

			</tr>
				

				<?php

				} else { 
				$n2 = NotaExamenData::getAllByNotaNo($a->id,$_SESSION["persona_id"]);
				
				?>
					
				<td style="width:300px;"><?php echo $n2->nota; ?></td>
			<?php
				
				?>
				<td style="width:300px;"><?php echo $n2->comentario; ?></td>
				
				<td style="width:300px;">
				<?php 
				echo "Entregada";
				?></td>


			<?php
			 }}}}else{
			echo "<p class='alert alert-danger'>No hay examenes asignados</p>";
		}
			}}
	 
		?>




	</div>
</div>

	



	</div>
	
</div>
</section>