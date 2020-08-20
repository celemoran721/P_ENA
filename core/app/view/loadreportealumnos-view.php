<?php
$grado = GradosData::getById($_GET["id"]);
$als = AlumnosGradoData::getAllByAlumnId($_GET["id"]);
$mats = AsignacionBGMPData::getAllByGradoId($_GET["id"]);
$alumno = AlumnosData::getById($_GET["id"]);
$cal = CalificacionesData::getAllByAlumnId($_GET["id"]);


?>

<div class="row">
	<div class="col-md-12">
		<h1><center>Reporte de Calificaciones del Alumno :  <small><?php echo $alumno->nombres." ".$alumno->apellidos;?></small></h1>
		
		<br><br>
		<?php

		$cal = CalificacionesData::getAllByAlumnId($_GET["id"]);
		if(count($cal)>0){
			// si hay usuarios
			?>

			<div class="panel panel-default">
			<div class="panel-heading">
			<table class="table table-bordered table-hover table-striped ">
			<thead>
			<th>Nombre del Estudiante</th>
			<?php foreach($cal as $c):
			$nombre =  $c->getMateria();?>
				<th><?php echo $nombre->nombre; ?></th>
			<?php endforeach; ?>

			</thead>
			<?php
			$als = AlumnosGradoData::getAllByAlumnId($_GET["id"]);
			foreach($als as $al){
				$alumns = $al->getAlumn();
				
				?>
				<tr>
				<td style="width:150px;"><?php echo $alumns->nombres." ".$alumns->apellidos; ?></td>
				
				
			
				
			
				<form id="form-<?php echo $al->id; ?>">
				<?php foreach($cal as $mat):
				$nombre =  $mat->getMateria();
				$promedio = CalificacionesData::getProm($nombre->id,$alumns->id);
				?>
				<?php foreach($promedio as $prom):?>
                
                <?php endforeach;?>
				<td style="width:70px;" >
				<fieldset disabled>
                 <option value="<?php echo $prom->id;?>"><?php echo $prom->val;?></option>
                <?php endforeach;?></form>
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
	</div>
	</div>
	<a href="index.php?view=reportealumnos&id=<?php echo $_GET["id"]; ?>" class="btn pull-right btn-sm btn-default"><i class='fa fa-arrow-left'></i> Regresar</a>
</div>
