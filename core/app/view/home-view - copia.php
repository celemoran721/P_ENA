<?php
$found=true;
$etapa = EtapasData::getAll();
$grado = GradosData::getAll();
	?>

	
<div class="row">

	<div  class="col-md-12 text-Black bg-blue">
	    <h1> <br> <center> Sistema Colegio Privado Enrique Novella Alvarado </center></h1>
</div>
</div>
<br>
 <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
            <div class="card">
              <div class="card-header">
             

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i
                      class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo count(GradosData::getAll());?></h3>
             <p>Grados</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./?view=grados" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo count(AlumnosData::getAll());?></h3>
             <p>Alumnos</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./?view=alumnos" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo count(ProfesoresData::getAll());?></h3>
             <p>Profesores</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./?view=profesores" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
    
		
		
		 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo count(MateriasData::getAll());?></h3>
             <p>Materias</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./?view=materias" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
                  <!-- ./col -->
                
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
		</section>
		
		

  <div class="row">


 
    

	

		 
		 
		
        <!-- ./col -->
 
              		
		
        <!-- ./col -->
		  
      </div>


	  
	  
	  
	   <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
            <div class="card">
              <div class="card-header">
             

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i
                      class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
	  <div class="row">
	  <div class="col-md-15">
	  <?php
//$found=true;
//$etapa = EtapasData::getAll();
$grado = GradosData::getAll();
	?>
	
<div class="clearfix"></div>
<?php if(count($grado)>0){?>
<br><table class="table table-bordered table-hover">
	<thead>
		
		<th>Nombre</th>
		<th>Etapa</th>
		<th>Cantidad de Alumnos</th>
		<th>Cantidad de Materias</th>
		<th></th>
	</thead>
	
<?php
			foreach($grado as $grados):
			$etapa =  $grados->getEtapa();
			$alumns = AlumnosGradoData::getAllByCount($grados->id);
			$mats = AsignacionBGMPData::getAllByCount($grados->id);
	?>

	<tr>
		<td style="width:600px;"><?php echo $grados->nombre; ?></td>
		<td style="width:600px;"><?php echo $etapa->nombre; ?></td>
		
		<td style="width:600px;" >
				<fieldset disabled>
				<form id="form-<?php echo $grados->id; ?>">
				<?php foreach($alumns as $alum):?>
                 <option value="<?php echo $alum->id;?>"><?php echo $alum->val;?></option>
                <?php endforeach;?></form>
				</td >
				
				<td style="width:600px;" >
				<fieldset disabled>
				<form id="form-<?php echo $grados->id; ?>">
				<?php foreach($mats as $mat):?>
                 <option value="<?php echo $mat->id;?>"><?php echo $mat->val;?></option>
                <?php endforeach;?></form>
				</td >
				
		<td style="width:350px;" >
		<a href="index.php?view=viewgrado&id=<?php echo $grados->id; ?>" class="btn btn-xs btn-default"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
</td >
		

	</tr>

<?php
endforeach;
?>
</table>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<div class="jumbotron">
		<h2>No hay Grados Creados</h2>
		<p>NNo hay grados ni etapas</p>
	</div>
	<?php
}

?>

	</div>
      <!-- /.row -->


</div>
 </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
		</section>