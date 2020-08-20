
<?php if(isset($_GET["materia"]) && $_GET["materia"]!=""):?>
	<?php
	//$materia = MateriasData::getLike($_GET["materia"]);
$materia = MateriasData::getLike($_GET["materia"]);
//print_r ($alumnoes);

if(count($materia)>0){
	?>
	<br>
	
	
<h3><p class=" text-black">Resultados de la Busqueda</p></h3>
<div class="panel panel-default">
			<div class="panel-heading">
<table class="table table-bordered table-hover table-striped -">
	<thead>
		<th >Nombre de la Materia</Th>
		<th></th>
		
		
	
		
	    
	
		
	</thead>
	<?php
		//$mater = AsignacionBGMPData::getAllByMateriaId($materia->id);
	 foreach($materia as $mat):
	 //$mat = AsignacionBGMPData::getAllByMateriaId($mat->id);
	?>


		

		<td style="width:375px;"><?php echo $mat->nombre; ?></td>
		
		
		
		
		<td style="width:200px;"><form method="post" action="index.php?view=loadreportematerias&id_materia=<?php echo $mat->id; ?>"">
		<div class="input-group">
      <span class="input-group-btn">

		<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Ver</button>
      </span>
    </div>
	  </div>
	  
		


	
	
	



		</form></td>
	</tr>
	

	<?php endforeach;?>
</table>

	<?php
}else{
	echo "<br><p class='alert alert-danger'>No se encontro el alumno</p>";
}
?>
<hr><br>
<?php else:
?>
<?php endif; ?>