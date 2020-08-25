	 
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
            
                 
                  <i class="fa "><h1><p class="text">COLEGIO ENA- GRADO: <small><?php echo $grados->nombre;?></small></p></h1></i>
			  </div>
</div>	
</div>	
 <div class="col-12">		  
 <div class="card card-warning">
  <div class="card-header">
 
	
		
	<a  href="index.php?view=newalumno&id_grado=<?php echo $_GET["id"]; ?>" class="btn btn-default" ><i  class='fa fa-asterisk'></i> Nuevo Alumno</a>
	<?php if(count($alumns)>0):?>
	<a href="index.php?view=assistance&team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-check'></i> Asistencia</a>
	<!-- <a href="index.php?view=behavior&id_grado=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-smile-o'></i> Comportamiento</a>-->
	
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class='fa fa-th-list'></i> Ejercicios en Clase <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="index.php?view=ejercicio1&id_grado=<?php echo $_GET["id"]; ?>">Ejercicio 1</a></li>
	 <li><a href="index.php?view=ejercicio2&id_grado=<?php echo $_GET["id"]; ?>">Ejercicio 2</a></li>
	 <li><a href="index.php?view=ejercicio3&id_grado=<?php echo $_GET["id"]; ?>">Ejercicio 3</a></li>
	  <li><a href="index.php?view=ejercicio4&id_grado=<?php echo $_GET["id"]; ?>">Ejercicio 4</a></li>
	   <li><a href="index.php?view=ejercicio5&id_grado=<?php echo $_GET["id"]; ?>">Ejercicio 5</a></li>
    
  </ul>
</div>
	
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class='fa fa-th-list'></i> Tareas <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="index.php?view=tarea1&id_grado=<?php echo $_GET["id"]; ?>">Tarea 1</a></li>
	 <li><a href="index.php?view=tarea2&id_grado=<?php echo $_GET["id"]; ?>">Tarea 2</a></li>
	 <li><a href="index.php?view=tarea3&id_grado=<?php echo $_GET["id"]; ?>">Tarea 3</a></li>
	  <li><a href="index.php?view=tarea4&id_grado=<?php echo $_GET["id"]; ?>">Tarea 4</a></li>
	   <li><a href="index.php?view=tarea5&id_grado=<?php echo $_GET["id"]; ?>">Tarea 5</a></li>
    
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class='fa fa-th-list'></i> Éxamenes <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="index.php?view=parcial1&id_grado=<?php echo $_GET["id"]; ?>">Parcial 1</a></li>
	 <li><a href="index.php?view=parcial2&id_grado=<?php echo $_GET["id"]; ?>">Parcial 2</a></li>
	 <li><a href="index.php?view=e_final&id_grado=<?php echo $_GET["id"]; ?>">Exámen Final</a></li>
	  
    
  </ul>
   </div>


<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class='fa fa-th-list'></i> Actitudinal <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="index.php?view=comportamiento&id_grado=<?php echo $_GET["id"]; ?>">Comportamiento</a></li>
	 <li><a href="index.php?view=asistencianota&id_grado=<?php echo $_GET["id"]; ?>">Asistencia</a></li>
	
	  
    
  </ul>
</div>

	
<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class='fa fa-th-list'></i> Listas <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="index.php?view=asistencialista&id_grado=<?php echo $_GET["id"]; ?>">Asistencia</a></li>
    <li><a href="index.php?view=listacalificaciones&id_grado=<?php echo $_GET["id"]; ?>">Calificaciones</a></li>
  </ul>
</div>
	
<?php endif; ?>
<!--	<a href="index.php?view=list&id_grado=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-area-chart'></i> Estadisticas</a> -->
</div>
<br>



<div class="col-md-8">
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
				<a href="index.php?view=editalumno&id=<?php echo $alumn->id;?> "class="btn btn-warning btn-sm"><small>Editar</small></a> 
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


