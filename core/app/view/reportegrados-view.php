<div class="row">
	<div class="col-md-8">
<div class="btn-group pull-right">
	
<div class="btn-group pull-right">
  
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/providers-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
</div>
		<h1><center><p class="text-primary">Seleccione el grado que desea consultar</p></h1>
<br>
<br>
<br>
		<?php
         
		$grados = GradosData::getAll();
		if(count($grados)>0){
			// si hay usuarios
			?>
<div class="panel panel-default">
			<div class="panel-heading">
			<table class="table table-bordered table-hover table-striped "> 
			<thead>
			<th>Nombre del grado</th>
			<th>Etapa</th>
	
			<th></th>
			</thead>
			<?php
			foreach($grados as $grado){
			$etapa =  $grado->getEtapa();
			?>
				<tr>
				<td><?php echo $grado->nombre; ?></td>
				<td><?php echo $etapa->nombre; ?></td>
		
				<td style="width:150px;">
                <a href="index.php?view=loadreportegrados&id=<?php echo $grado->id; ?>" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></a></td>

				</td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Grados en el sistema</p>";
		}


		?>
</div>
</div>
	</div>
</div>