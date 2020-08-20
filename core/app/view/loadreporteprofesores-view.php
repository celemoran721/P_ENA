<?php
$prof = ProfesoresData::getById($_GET["id_profesor"]);
//$als = AlumnosGradoData::getAllByAlumnId($_GET["id"]);
//$mats = AsignacionBGMPData::getAllByGradoId($_GET["id"]);
//$alumno = AlumnosData::getById($_GET["id"]);
//$cal = CalificacionesData::getAllByAlumnId($_GET["id"]);


?>

<div class="row">
	<div class="col-md-8">
		<h1><center>Reporte de Materias del Profesor :  <br> 
		<center><small><?php echo $prof->nombres." ".$prof->apellidos;?></small></h1>
		
		<br><br>
		<?php

		$mats = AsignacionBGMPData::getAllByProfMatId($_GET["id_profesor"]);
		if(count($mats)>0){
			// si hay usuarios
			?>

			<center><div class="panel panel-default">
			<div class="panel-heading">
			<table class="table table-bordered table-hover table-striped ">
			<thead><center>
			<th>Nombre de la Materia</th>
			<th>Grado</th>
			<th></th>
			

			</thead>
			<?php
			//$als = AlumnosGradoData::getAllByAlumnId($_GET["id"]);
			foreach($mats as $mat){
				$m = $mat->getMateria();
				$g = $mat->getGrado();
				
				?>
				<tr>
				<td style="width:300px;"><?php echo $m->nombre; ?></td>
				<td style="width:200px;"><?php echo $g->nombre; ?></td>
				
				
			
				
			
				
				</td >

				</tr>
				<?php

			}
			echo "</table>";

		}else{
			echo "<p class='alert alert-danger'>No hay Grupos</p>";
		}


		?>
		


	</div>
	<br>
	<a href="index.php?view=reporteprofesores&id=<?php echo $_GET["id_profesor"]; ?>" class="btn pull-right btn-sm btn-default"><i class='fa fa-arrow-left'></i> Regresar</a>

	</div>
	</div>
	</div>
