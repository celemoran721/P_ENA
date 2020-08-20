<div class="row">
	<div class="col-md-12">
	<h1>Materias</h1>
	<p><b>Buscar Materias por su nombre:</b></p>
		<form id="searchp">
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" name="view" value="sell">
				
				<input type="text" id="materia_code" name="mate" class="form-control">
			</div>
			<div class="col-md-3">
			<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Buscar</button>
	
			</div>
		</div>
		</form>
		
	</div>
			<hr><br>
	<br>
<div id="show_search_results"></div>
<script>
//jQuery.noConflict();

$(document).ready(function(){
	$("#searchp").on("submit",function(e){
		e.preventDefault();
		
		$.get("./?action=searchmateria",$("#searchp").serialize(),function(data){
			$("#show_search_results").html(data);
		});
		$("#profesor_code").val("");

	});
	});

$(document).ready(function(){
    $("#materia_code").keydown(function(e){
        if(e.which==17 || e.which==74){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});

</script>
 
  


  
 

</div>


<br><br><br><br><br>
