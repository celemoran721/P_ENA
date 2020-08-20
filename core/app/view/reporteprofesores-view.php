<div class="row">
	<div class="col-md-10">
<div class="btn-group pull-right">
	
<div class="btn-group pull-right">
  
  <ul class="dropdown-menu" role="menu">
   
  </ul>
</div>
</div>
		<h1><center><p class="text-primary">Ingrese el nombrel Profesor para Generar Reporte</p></h1>
		<br>
		<br>
		<form id="searchp">
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" name="view" value="sell">
				
				<input type="text" id="profesor_code" name="profesor" class="form-control">
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
		
		$.get("./?action=searchreporteprofesores",$("#searchp").serialize(),function(data){
			$("#show_search_results").html(data);
		});
		$("#profesor_code").val("");

	});
	});

$(document).ready(function(){
    $("#profesor_code").keydown(function(e){
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
		