<?php
$grado = GradosData::getById($_GET["id"]);
//$mats = AsignacionBGMPData::getAllByGradoId($_GET["id"]);
$materia = MateriasData::getAllByTeamId($_GET["id"]);

?>
<div class="row">
	<div class="col-md-12">
		<h1><center>Reporte de Calificaciones del Grado :  <small><?php echo $grado->nombre;?></small></h1>
		<?php if(count($materia)>0):?>
				<?php endif; ?>
		<br><br>
		<?php

		$alumns = AlumnosGradoData::getAllByTeamId($_GET["id"]);
		if(count($alumns)>0){
			// si hay usuarios
			?>

			<div class="panel panel-default">
			<div class="panel-heading">
			<table class="table table-bordered table-hover table-striped ">
			<thead>
			<th>Nombre del Estudiante</th>
			<?php foreach($materia as $mat):
			//$nombre =  $mat->getMateria();?>
				<th><?php echo $mat->nombre; ?></th>
			<?php endforeach; ?>

			</thead>
			<?php
			foreach($alumns as $al){
				$alumn = $al->getAlumn();
				
				?>
				<tr>
				<td style="width:275px;"><?php echo $alumn->nombres." ".$alumn->apellidos; ?></td>
				
				
				<?php foreach($materia as $mat):
				//$nombre =  $mat->getMateria;
			$promedio = CalificacionesData::getProm2($mat->id,$alumn->id);
			?>
				<td><?php if($promedio!=null ){ echo $promedio->val; }  ?></td>
			<?php endforeach; ?>
				
				
			

				</tr>
				<?php

			}
			echo "</table>";

		}else{
			echo "<p class='alert alert-danger'>No hay Grupos</p>";
		}


		?>
		


	</div>
	</div>
	</div>
	<a href="index.php?view=reportegrados&id=<?php echo $_GET["id"]; ?>" class="btn pull-right btn-sm btn-default"><i class='fa fa-arrow-left'></i> Regresar</a>
</div>