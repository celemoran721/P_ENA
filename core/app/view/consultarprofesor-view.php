<div class="row">
	<div class="col-md-12">
	<h1>Profesores</h1>
	<p><b>Buscar profesor por nombre:</b></p>
		<form id="searchp">
		<div class="row">
			<div class="col-md-6">
				
				
				<input type="text" id="profesor_code" name="profesor" class="form-control">
			</div>
			<div class="col-md-3">
			<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Buscar</button>
	
			</div>
		</div>
		</form>
		
	
			<hr><br>
	<br>
<div id="show_search_results">
<script>
//jQuery.noConflict();

$(document).ready(function(){
	$("#searchp").on("submit",function(e){
		e.preventDefault();
		
		$.get("./?action=searchprofesor",$("#searchp").serialize(),function(data){
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
 
  </div>

</div>
  
 

</div>


<br><br><br><br><br>
