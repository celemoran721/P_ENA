<div class="row">
	<div class="col-md-10">
<div class="btn-group pull-right">
	
<div class="btn-group pull-right">
  
  <ul class="dropdown-menu" role="menu">
   
  </ul>
</div>
</div>
		<h1><center><p class="text-primary">Ingrese el nombre del alumno para Generar Reporte</p></h1>
		<br>
		<br>
		<form id="searchp">
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" name="view" value="sell">
				
				<input type="text" id="alumno_code" name="alumno" class="form-control">
			</div>
			<div class="col-md-3">
			<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Buscar</button>
	
			</div>
		</div>
		</form>
		<div id="show_search_results"></div>
<script>
//jQuery.noConflict();

$(document).ready(function(){
	$("#searchp").on("submit",function(e){
		e.preventDefault();
		
		$.get("./?action=searchreportealumno",$("#searchp").serialize(),function(data){
			$("#show_search_results").html(data);
		});
		$("#alumno_code").val("");

	});
	});

$(document).ready(function(){
    $("#alumno_code").keydown(function(e){
        if(e.which==17 || e.which==74){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});

</script>
<br>
<br>
<br>
		<?php
         
		$id_alumno = AlumnosGradoData::getAll();
		if(count($id_alumno)>0){
			// si hay usuarios
			?>
<div class="panel panel-default">
			<div class="panel-heading">
			<table class="table table-bordered table-hover table-striped "> 
			<thead>
			<th>Nombre del Alumno</th>
			<th>Grado al que pertenece</th>
			<th>Código</th>
			<th>Nombre Encargado</th>
			<th>Telefono Encargado</th>
			<th></th>
			
	
			<th></th>
			</thead>
			<?php
			foreach($id_alumno as $alum){
			$al =  $alum->getAlumn();
			$gr =  $alum->getGrado();
			?>
				<tr>
				<td><p class="text-primary"><?php echo $al->nombres." ".$al->apellidos; ?></p></td>
				<td><p class="text-primary"><?php echo $gr->nombre; ?></p></td>
				<td><p class="text-primary"><?php echo $al->codigo; ?></p></td>
				<td><p class="text-primary"><?php echo $al->enc_nombre?></p></td>
				<td><p class="text-primary"><?php echo $al->enc_telefono?></p></td>
			
				<td style="width:150px;">
                <a href="index.php?view=loadreportealumnos&id=<?php echo $al->id; ?>" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></a></td>

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