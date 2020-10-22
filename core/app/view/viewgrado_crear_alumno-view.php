	 
	 <br> <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
              

<?php
$grados = GradosData::getById($_GET["id"]);
//$alumns =  AlumnosData::getById($_GET["id"]);
$alumns = AlumnosGradoData::getAllByTeamId($_GET["id"]);
//$grados =  $profesor->getGrado();

?>
<div class="card card-info">
              <div class="card-header">
            
                 
                  <i class="fa "><h1><p class="text">COLEGIO ENA- GRADO: <small></small></p></h1></i>
			  </div>
</div>	
</div>	
 <div class="col-12">		  
 <div class="card card-warning">
  <div class="card-header">
 
	
		
	<a  href="index.php?view=newalumno&id_grado=<?php echo $_GET["id"]; ?>" class="btn btn-default" ><i  class='fa fa-asterisk'></i> Nuevo Alumno</a>
</div>
<br>



<div class="col-md-12">
				<?php

		if(count($alumns)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover table-striped">
			<thead>
			<th>Nombre del alumno</th>
			<th>Código</th>
			<th>Dirección</th>
			<th>Alergias</th>
			<th>Medicamento</th>
			<th>Padre</th>
			<th>Telefono</th>
		
			<th></th>
			</thead>
			<?php
			foreach($alumns as $al){
				$alumn = $al->getAlumn();
				$pad = $al->getPadre();
				
				?>
				<tr>
				<td><small><?php echo $alumn->nombres." ".$alumn->apellidos; ?></small></td>
				<td><small><?php echo $alumn->codigo; ?></small></td>
				<td><small><?php echo $alumn->direccion; ?></small></td>
				<td><small><?php echo $alumn->alergias; ?></small></td>
				<td><small><?php echo $alumn->medicamento; ?></small></td>
				<td><small><?php echo $pad->ref_nombre; ?></small></td>
				<td><small><?php echo $pad->ref_telefono; ?></small></td>

				<td style="width:175px;"><small>
				<a href="index.php?view=editalumno&id=<?php echo $alumn->id;?>&tid=<?php echo $grados->id;?>" class="btn btn-warning btn-sm"><small>Editar</small></a>
			<a href="index.php?view=delalumno&id=<?php echo $alumn->id;?>&tid=<?php echo $grados->id;?>" class="btn btn-danger btn-sm"><small>Eliminar</small></a>
				<a href="index.php?view=viewalumno&id=<?php echo $alumn->id; ?>" class="btn btn-sm btn-sm"><i class="fa fa-eye"></i></a>	
			
				</small>
				</td>
				</tr>
				<?php

			}

echo "</table>";

		}else{
			echo "<p class='alert alert-danger'>No hay Alumnos</p>";
		}


		?>
		
			</div>
		
		
		<br><br>
		
		<div class="col-md-8">
		
		<?php
$profesores = AsignacionBGMPData::getAllByGradoId($_GET["id"]);

		if(count($profesores)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover table-striped">
			<thead>
			<th>Nombre del Profesor</th>
			<th>Materia Asignada</th>
			<th></th>
			</thead>
			<?php
			foreach($profesores as $pro){
				$profesor = $pro->getProfesor();
				$materia = $pro->getMateria();
				?>
				<tr>
				<td><?php echo $profesor->nombres." ".$profesor->apellidos; ?></td>
				<td><?php echo $materia->nombre; ?></td>
				<td style="width:150px;"><a href="index.php?view=viewprofesor&id=<?php echo $profesor->id;?>&tid=<?php echo $grados->id;?>" class="btn btn-default btn-xs">Ver Profesor</a>
				</tr>
				<?php

			}

echo "</table>";

		}else{
			echo "<p class='alert alert-danger'>No hay Profesores ni Materias Asignadas</p>";
}


		?>

	</div>

	</div>
</div>



