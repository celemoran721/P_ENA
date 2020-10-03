<?php
$as = AsignacionBGMPData::getAllByTeamId($_GET["id_grado"]);
?>

<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=team&id=<?php echo $_GET["id_grado"]; ?>" class="btn pull-right btn-sm btn-default"><i class='fa fa-arrow-left'></i> Regresar</a>
		<h1>Tareas</h1>
        <?php if(count($as)>0):?>

<form class="form-horizontal" id="loadlist" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Seleccionar Bloque:</label>
    <div class="col-lg-7">
    <select class="form-control" name="id_materia" required>
    <option value="">-- SELECCIONE --</option>
    	<?php foreach($as as $asi):
		$mat=$asi-> getMateria();?>
    		<option value="<?php echo $mat->id; ?>"><?php echo $mat->nombre; ?></option>
    	<?php endforeach; ?>
    </select>
    </div>
    <div class="col-lg-offset-3">
    <input type="hidden" name="id_grado" value="<?php echo $_GET["id_grado"];?>">
      <button type="submit" class="btn btn-default">Seleccionar</button>
    </div>

  </div>
</form>
<?php else:?>
    <p class="alert alert-danger">No hay bloques, por favor crea bloques de calificaciones.</p>    
<?php endif;?>
<div id="data">
	<p class="alert alert-warning">No hay datos, por favor selecciona un block y de click en el boton buscar.</p>
</div>

	</div>
</div>

<script>
	$("#loadlist").submit(function(e){
		e.preventDefault();
		var d = $("#loadlist").serialize();
		$.get("./?action=loadtareas",d,function(data){
			console.log(data);
			$("#data").html(data);

		});
	});
</script>