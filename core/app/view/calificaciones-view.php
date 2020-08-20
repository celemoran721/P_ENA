<?php
$as = AsignacionBGMPData::getAllByTeamId($_GET["id_grado"]);

?>
	
<div class="col-md-12">

<div class="btn-group pull-right">
 

</div>
<h1>Buscar Alumno</h1>
  <p><b>Ingresar nombre:</b></p>
	
		<form id="searcht">
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" name="view" value="tarea">
				<input type="text" id="tarea_code" name="tarea" class="form-control">
			</div>
			<div class="col-md-3">
			<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Buscar</button>
			</div>
		</div>
		</form>
 </div>
 <div id="show_search_results"></div>
  <script>
//jQuery.noConflict();

$(document).ready(function(){
	$("#searcht").on("submit",function(e){
		e.preventDefault();
		
		$.get("./?action=searchTareas",$("#searchp").serialize(),function(data){
			$("#show_search_results").html(data);
		});
		$("#tarea_code").val("");

	});
	});

$(document).ready(function(){
    $("#tareas_code").keydown(function(e){
        if(e.which==17 || e.which==74){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});
</script>
	

	
   <script type="text/javascript">
  function sumar()
    {
		var valor1=document.getElementById("monto").value;
		var valor2=document.getElementById("saldoA").value;
	    var valor3=document.getElementById("tipomov_id").value;
		 
		
		
		if (valor3 == 1){
		   var result=parseFloat(valor2)+parseFloat(valor1);
		}
		
		if (valor3 == 2) {
		
		   var result=parseFloat(valor2)-parseFloat(valor1);
		}
		
		if (valor3 == 3) {
		
		   var result=parseFloat(valor2)-parseFloat(valor1);
		}
		
		if (valor3 == 4) {
		
		   var result=parseFloat(valor2)-parseFloat(valor1);
		}
		
		if (valor3 == 5) {
		
		   var result=parseFloat(valor2)-parseFloat(valor1);
		}
		
		
		if (valor3 == 6) {
		
		   var result=parseFloat(valor2)-parseFloat(valor1);
		}
		
		if (valor3 == 7) {
		
		   var result=parseFloat(valor2)-parseFloat(valor1);
		}
		
		if (valor3 == 8) {
		
		   var result=parseFloat(valor2)-parseFloat(valor1);
		}
		
		 if (!isNaN(result)) {
                document.getElementById("saldo").value= result;
    
            }
		
	 }
 
 
	</script>
  


<?php     if(isset($_SESSION["cart25"])):
//print_r($_SESSION);
$total = 0;
?>

<h2>Lista de Repuestos / Concepto / Suministros</h2>
<table class="table table-bordered table-hover">
<thead>
	<th style="width:30px;">Codigo</th>
	<th style="width:30px;">Descripcion</th>
	<th style="width:30px;">Cantidad</th>
	<th style="width:30px;">Precio</th>
	<th style="width:50px;">Total</th>
	<th style="width:50px;">Placa</th>
	
	
	
	<th ></th>
</thead>
<?php foreach($_SESSION["cart25"] as $p):
$product = productData::getById($p["product_id"]);

?>
<tr >
    <td><?php echo $product->id; ?></td>
	<td><?php echo $product->name;  $concepto = $concepto.$p["q"]. " ". $product->name." , " ?></td>
	<td ><?php echo $p["q"]; ?></td>
	<td ><?php echo $p["p"]; ?></td>
	<td><b>Q <?php  $pt = $p["q"]*$p["p"]; $total +=$pt; echo number_format($pt,2); ?></b></td>
	<td ><?php echo $p["placa"]; ?></td>

  	
	<td style="width:40px;"><a href="index.php?view=clearcartCCC&product_id=<?php echo $product->id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></td>
</tr>

<?php endforeach; ?>
</table>





<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Registro</h1>
	<br>
		<form class="form-horizontal" method="POST" enctype="multipart/form-data" id="addcChica" action="index.php?view=addcChicaViatico" role="form">
 


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo Transaccion*</label>
    <div class="col-md-8">
    <select name="tipomov_id" required class="form-control" id="tipomov_id">
    <option value="">-- NINGUNA --</option>
    <?php foreach($tiposmovs as $tiposmov):?>
      <option value="<?php echo $tiposmov->id;?>"><?php echo $tiposmov->descripcion;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div>
  
  
  
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Piloto*</label>
    <div class="col-md-8">

  <select name="piloto_id" class="form-control">
	<option value="NINGUNO">-- NINGUNO --</option>
	<?php foreach($pilotos as $p):?>
	<option value="<?php echo $p->id;?>"><?php echo $p->name." ".$p->lastname;?></option>
	<?php endforeach; ?>
</select> </div>

</div>


<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Proveedor*</label>
    <div class="col-md-8">

  <select name="prove_id" class="form-control">
	<option value="NINGUNO">-- NINGUNO --</option>
	<?php foreach($prove as $pr):?>
	<option value="<?php echo $pr->id;?>"><?php echo $pr->name." ".$pr->lastname;?></option>
	<?php endforeach; ?>
</select> </div>

</div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Placa de Transporte* </label>
  
  	 <div class="col-lg-8">
	  <?php
   $camiones = camionData::getAll();
	 ?>
        <select name="placa_cabezal" required class="form-control">
        <option value="NINGUNO">-- NINGUNO --</option>
        <?php foreach($camiones as $camion):?>
        <option value="<?php echo $camion->placa;?>"><?php echo $camion->placa;?></option>
        <?php endforeach;?>
        </select>    
		</div>
  </div>
  

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Concepto*</label>
    <div class="col-md-8">

      <input type="text" name="concepto" class="form-control" id="concepto" value="<?php echo $concepto; ?>" placeholder="Concepto...">
    </div>
  </div> 

 
  
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Documento*</label>
    <div class="col-md-8">
	
	<input type="text" name="documento" required class="form-control" id="documento" placeholder="Documento">
  
    </div>
  </div>
 
      <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Observaciones*</label>
    <div class="col-md-8">
	
	<input type="text" name="obs" required class="form-control" id="obs" placeholder="Obs..." onkeyup="sumar();">
  
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha*</label>
  <div class="col-md-8">
   <input type="date" name="sd"  required value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
   </div>
  </div>
  

    
   <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Saldo Anterior</label>
       <div class="col-md-8">
	<fieldset disabled>
      <input type="text" name="saldoA" class="form-control" id="saldoA" value="<?php echo  $saldoAnt; ?>" placeholder="Saldo">
    </div>
  </div>
  
     <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Monto</label>
    <div class="col-md-8">

      <input type="text" name="monto" class="form-control" id="monto" value="<?php echo $total; ?>" placeholder="Monto">
    </div>
  </div> 


 

  
   
   <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Saldo*</label>
       <div class="col-md-8">
	
      <input type="text" name="saldo" required class="form-control" id="saldo" placeholder="Saldo">
    </div>
  </div>
  
      <p class="alert alert-info">* Campos obligatorios</p> 
  
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Transaccion</button>
    </div>
  </div>
   
  
  
  
  
  
</form>
<?php endif; ?>



	</div>
</div>
	
	
	
	
	
	
	

<script>
  $(document).ready(function(){
    $("#camion_code").keydown(function(e){
        if(e.which==17 || e.which==74 ){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});

</script>