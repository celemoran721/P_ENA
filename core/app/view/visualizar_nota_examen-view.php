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
				//print_R($n->entrega_id);
				//print_R($en->id);
				
					
		         ?>
				 
				  <?php
				
				?>
				<td style="width:300px;"><?php echo $n->nota; ?></td>
			<?php
				
				?>
				<td style="width:300px;"><?php echo $n->comentario; ?></td>
				
				<td style="width:300px;">
				<?php 
				echo "Entregado"; }}
				?></td>
					
				<?php
				
				$n2=NotaExamenData::getAllByNotaT($a->id,$_SESSION['persona_id']);
				//print_r($n2);
				foreach($n2 as $nn){
				
				?>
				<td style="width:300px;"><?php echo $nn->nota; ?></td>
			<?php
				
				?>
				<td style="width:300px;"><?php echo $nn->comentario; ?></td>
				
				<td style="width:300px;">
				<?php 
				echo "No entregado"; 
				}
				?></td>
				<?php
				
				?>


			
				</tr>

		
				 
		  

			
				

				


			<?php
			 }else{
			echo "<p class='alert alert-danger'>No hay examenes asignados</p>";
		}
			}}
	 
		?>




	</div>
</div>

	



	</div>
	
</div>
</section>