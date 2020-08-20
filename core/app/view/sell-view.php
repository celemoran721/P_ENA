<div class="row">
	<div class="col-md-12">
	<h1>Ventas</h1>
	<p><b>Buscar producto por nombre o por codigo:</b></p>
		<form id="searchp">
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" name="view" value="sell">
				<input type="text" id="product_code" name="product" class="form-control">
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
	$("#searchp").on("submit",function(e){
		e.preventDefault();
		
		$.get("./?action=searchproduct",$("#searchp").serialize(),function(data){
			$("#show_search_results").html(data);
		});
		$("#product_code").val("");

	});
	});

$(document).ready(function(){
    $("#product_code").keydown(function(e){
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
		var valor2=document.getElementById("descuento").value;
	   
		
		
		   var result=parseFloat(valor1)-parseFloat(valor2);
	
		
		
		
		 if (!isNaN(result)) {
                document.getElementById("descontado").value= result;
    
            }
		
	 }
 
 
	</script>
  


  
  
<?php if(isset($_SESSION["errors"])):?>
<h2>Errores</h2>
<p></p>
<table class="table table-bordered table-hover">
<tr class="danger">
	<th>Codigo</th>
	<th>Producto</th>
	<th>Mensaje</th>
</tr>
<?php foreach ($_SESSION["errors"]  as $error):
$product = ProductData::getById($error["product_id"]);
?>
<tr class="danger">
	<td><?php echo $product->id; ?></td>
	<td><?php echo $product->name; ?></td>
	<td><b><?php echo $error["message"]; ?></b></td>
</tr>

<?php endforeach; ?>
</table>
<?php
unset($_SESSION["errors"]);
 endif; ?>


<!--- Carrito de compras :) -->
<?php if(isset($_SESSION["cart"])):
$total = 0;
?>
	<div class="col-md-12">
<h2>Lista de Productos</h2>

<table class="table table-bordered table-hover">
<thead>
	<th style="width:30px;">Codigo</th>
	<th style="width:30px;">Presentacion</th>
	<th style="width:30px;">Producto</th>
	<th style="width:50px;">Descripcion</th>
	<th style="width:50px;">Ubicacion</th>
	<th style="width:30px;">Existencia en Bodega</th>
	<th style="width:30px;">Existencia - venta</th>
	<th style="width:30px;">Cantidad</th>
	<th style="width:30px;">Precio</th>
	<th style="width:30px;">Total</th>
	
	<th ></th>
</thead>
<?php foreach($_SESSION["cart"] as $p):
$product = ProductData::getById($p["product_id"]);
?>
<tr >
    <td><?php echo $product->id; ?></td>
		<td><?php if($product->presentation!=null){echo $product->getumedida()->name;}else{ echo "<center>----</center>"; }  ?></td>
	<td><?php echo $product->name; ?></td>
	<td><?php echo $product->description; ?></td>
	<td><?php echo $product->ubicacion; ?></td>
	<td><?php echo $product->unit; ?></td>
	<td><?php echo $product->unit-$p["q"]; ?></td>
	<td ><?php echo $p["q"]; ?></td>
	<td ><?php echo $p["p"]; ?></td>
<td><b>Q <?php  $pt = $p["q"]*$p["p"]; $total +=$pt; echo number_format($pt,2); ?></b></td>


		<td style="width:40px;"><a href="index.php?view=clearcart&product_id=<?php echo $product->id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></td>
</tr>

<?php endforeach; ?>
</table>
</div>
<form method="post" class="form-horizontal" id="processsell" action="index.php?view=processsell">
 

  
 

<div class="col-md-12">
<h2>Resumen</h2>


  
  


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Numero de Factura*</label>
    <div class="col-md-6">
      <input type="text" name="no_fac" required class="form-control" id="no_fac" placeholder="Numero de Factura">
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cliente* </label>
        <div class="col-lg-6">
    <?php
$clients =   PersonData::getClients();
    ?>
    <select name="client_id"  required class="form-control">
 
    <?php foreach($clients as $client):?>
    	<option value="<?php echo $client->id;?>"><?php echo $client->nit." ".$client->name." ".$client->lastname;?></option>
    <?php endforeach;?>
    	</select>
    </div>
  </div>
  



  
  
  <div class="form-group">
   <label for="inputEmail1" class="col-lg-2 control-label">Forma de Pago*</label> 
   <div class="col-lg-6">
  <SELECT NAME="fPago"  required class="form-control"> 
  <option  value="Contado">CONTADO</option>
  <option  value="Credito">CREDITO</option>
  </SELECT> 
 </div>
 </div>
 
 
    <input type="hidden" name="total" value="<?php echo $total; ?>" class="form-control" placeholder="Total">
  
   
  <h2>
	<td><p><b>  Total a Pagar Q. <?php echo number_format($total,2 ); ?></b></p></td>
  </h2>
  
  
   

  
     <input type="hidden" name="totalp" value="<?php echo $total; ?>" class="form-control" placeholder="Total a Pagar">
  <input type="hidden" name="iva" value="<?php echo $total-($total/1.12); ?>" class="form-control" placeholder="IVA">
  <input type="hidden" name="total" value="<?php echo $total/1.12; ?>" class="form-control" placeholder="Total">
  
  

  

  </div>
 
  
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
          <input name="is_oficial" type="hidden" value="1">
        </label>
      </div>
    </div>
  </div>
   
  
  
  
  
    <p class="alert alert-info">* Campos obligatorios</p>
  
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
		<a href="index.php?view=clearcart" class="btn btn-lg btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
        <button class="btn btn-lg btn-primary"><i class="glyphicon glyphicon-usd"></i><i class="glyphicon glyphicon-usd"></i> Finalizar Venta</button>
        </label>
      </div>
    </div>
  </div>
</form>

</div>
</div>

<br><br><br><br><br>
<?php endif; ?>

</div>