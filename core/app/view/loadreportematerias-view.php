<?php
//$mat = MateriasData::getById($_GET["id"]);
$cal = CalificacionesData::getAllByMateriaId($_GET["id_materia"]);
$mat = MateriasData::getAllByMateriaId($_GET["id_materia"]);
$estado="";

?>

<div class="row">
	<div class="col-md-12">
	
		<h1><center>Reporte de notas de la materia : <small><?php echo $mat->nombre;?></small> </h1>
		<br></br>
        <?php if(count($cal)>0){?>

<div class="panel panel-default">
			<div class="panel-heading">

			</div>
			<br></br>
			<table class="table table-bordered table-hover table-striped ">
			<thead>
			<th>Nombre del Alumno</th>
			<th>Ej1</th>
			<th>Ej2</th>
			<th>Ej3</th>
			<th>Ej4</th>
			<th>Ej5</th>
			<th>T1</th>
			<th>T2</th>
			<th>T3</th>
			<th>T4</th>
			<th>T5</th>
			<th>As.</th>
			<th>Com.</th>
			<th>Parcial 1</th>
			<th>Parcial 2</th>
			<th>Exámen Final</th>
			<th>Promedio</th>
			<th>Estado</th>

			<th>
			</th>
			</thead>
			<?php
			foreach($cal as $al){
				$alumn = $al->getAlumn();
				$nota = CalificacionesData::getByBA($_GET["id_materia"],$alumn->id);
				$promedio = CalificacionesData::getProm($_GET["id_materia"],$alumn->id);
				//$est = CalificacionesData::getEstado($_GET["id_materia"],$alumn->id);
				//$nota = AutorData::getAll();
				?>
				<tr>
				<td style="width:100px;"><p class="text-primary"><?php echo $alumn->nombres." ".$alumn->apellidos; ?></p></td>
				



				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->ej1;?></option>
				</form>
				</td >
				
				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->ej2;?></option>
				</form>
				</td >

				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->ej3;?></option>
				</form>
				</td >

				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->ej4;?></option>
				</form>
				</td >	


				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->ej5;?></option>
				</form>
				</td >	


				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->tarea1;?></option>
				</form>
				</td >		

				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->tarea2;?></option>
				</form>
				</td >

				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->tarea3;?></option>
				</form>
				</td >		

				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->tarea4;?></option>
				</form>
				</td >	

				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->tarea5;?></option>
				</form>
				</td >	
				
				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->asistencia;?></option>
				</form>
				</td >
				
				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->comportamiento;?></option></form>
				</td >

				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->parcial1;?></option>
				</form>
				</td >				
				
				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->parcial2;?></option>
				</form>
				</td >
				
				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<option value="<?php echo $nota->id;?>"><?php echo $nota->e_final;?></option>
				</form>
				</td >
				
				
				
				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<?php foreach($promedio as $prom):?>
                 <option value="<?php echo $prom->id;?>"><?php echo $prom->val;?></option>
                <?php endforeach;?></form>
				</td >
				
				<td style="width:40px;" >
				<fieldset disabled>
				<form id="form-<?php echo $al->id; ?>">
				<?php foreach($promedio as $prome):
				  if ($prom->val>=61) {
					$estado="APROBADO";
				} else {
					$estado="REPROBADO";
				}
				?>
                 <option value="<?php echo $prome->id;?>"><?php echo $estado;?></option>
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
		
				<a href="index.php?view=reportemateria&id=<?php echo $_GET["id_materia"]; ?>" class="btn pull-right btn-sm btn-default"><i class='fa fa-arrow-left'></i> Regresar</a>




	</div>
</div>

<script>
	$("#loadlist").submit(function(e){
		e.preventDefault();
		var d = $("#loadlist").serialize();
		$.get("./?action=loadcal",d,function(data){
			console.log(data);
			$("#data").html(data);

		});
	});
</script>