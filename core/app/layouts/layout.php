<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>COLEGIO ENA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

  <body class="<?php if(isset($_SESSION["persona_id"]) || isset($_SESSION["client_id"])):?>  skin-blue-light sidebar-mini <?php else:?>login-page<?php endif; ?>" >
 
 <div class="wrapper">

      <!-- Main Header -->
      <?php if(isset($_SESSION["persona_id"]) || isset($_SESSION["client_id"])):?>
	  <nav class="main-header navbar navbar-expand  navbar-light bg-dark border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./" class="nav-link">Gestión Colegio Privado Enrique Novella Alvarado</a>
      </li>

    </ul>
</nav>
      <header class="main-header">

        <!-- Logo -->

        <!-- Header Navbar -->
		
        <nav class="navbar bg-secondary navbar-static-top" role="navigation">
		
		
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class=""><?php if(isset($_SESSION["persona_id"]) ){ echo PersonaData::getById($_SESSION["persona_id"])->nombres; 
				  
				   $usuario = PersonaData::getById($_SESSION["persona_id"]);

                  }?> <b class="caret"></b> </span>

                </a>
                <ul class="dropdown-menu bg-warning">
                  <!-- The user image in the menu -->
              
                  
                  <!-- Menu Footer-->
                  <li class="navbar bg-warning navbar-static-top">
                    <div class="pull-right">
                      <a href="./logout.php" class="btn btn-default ">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- sidebar: style can be found in sidebar.less -->
        

		      <div class="sidebar">
			  
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-2 mb- d-flex">
        <div class="image">
          <img src="dist/img/ena1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
         <h4>  <a href="#" class="d-block">COLEGIO ENA</a> </h4>
        </div>
      </div>
	        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="./index.php?view=home" class="d-block"><H5><i class='fa fa-home'></i><span>Inicio</span></H5></a>
        </div>
      </div>
          <!-- Sidebar Menu -->


            <?php if(isset($_SESSION["persona_id"])):?>

		  
		    <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			 
			  <?php if( $usuario->rol==2){?>
			  <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Asignaciones
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=materias" class="nav-link active">
                  <i class="fa fa-pencil nav-icon"></i>
                  <p>Asignar Materias</p>
                </a>
              </li>
            </ul>
			<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=newproduct" class="nav-link active">
                  <i class="fa fa-pencil nav-icon"></i>
                  <p>Prod</p>
                </a>
              </li>
            </ul>
          </li>
			  <?php } ?>
		  
		  
		  <?php if($usuario->rol==2 ){?>
		   <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Gestión de Grados
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=grados_add_alumno" class="nav-link active">
                  <i class="fa fa-list-alt nav-icon"></i>
                  <p>Crear grados y alumnos</p>
                </a>
              </li>
             
            </ul>
          </li>
         <?php } ?>

             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			 
			  <?php if($usuario->rol==3 ){?>
			  

			  <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Crear Calificaciones
                <i class="right fa fa-angle-left"></i>
              </p>

            </a>
            <ul class="nav nav-treeview">
              		
                  <datalist name="id_grado" required class="form-control">
				 
                  <option class="fa fa-plus-circle nav-icon" value=""> Seleccionar Bimestre</option>
				  	 <?php 
							$bimestre = BimestresData::getAll();
							foreach($bimestre as $bim):
					?>
                
			  	 <a href="./?view=calificacioneslist_b1&id=<?php echo $bim->id;?>" class="nav-link active">		
				<option value="<?php echo $bim->id;?>"><?php echo $bim->nombre;?></option>
				<?php 	
							endforeach;
				?>
				
				  </datalist>
	  
                </a>
             
            </ul>
          </li>
			  <?php } ?>
		  


             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			 
			  <?php if($usuario->rol==3 ){?>
			  

			  <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Crear Calificaciones
                <i class="right fa fa-angle-left"></i>
              </p>

            </a>
            <ul class="nav nav-treeview">
              
                  <i class="fa fa-plus-circle nav-icon"></i>
					
						
                  <select name="id_grado" required class="form-control">
				   
                  <option value="">-- Seleccionar --</option>
				  
                 
			  	 	
                
				 <?php 
							$bimestre = BimestresData::getAll();
							foreach($bimestre as $bim):
						?>
						<li class="nav-item">
			  	 <a href="./?view=calificacioneslist_b1&id=<?php echo $bim->id;?>" class="nav-link active">		
				<option value="<?php echo $bim->id;?>"><?php echo $bim->nombre;?></option>
				</a>
				<?php endforeach;?>
      </select>
	  
                
             
            </ul>
          </li>
			  <?php } ?>







		  <?php if($usuario->rol==2 ){?>
		  		   <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Gestión de Profesores
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=profesores" class="nav-link active">
                  <i class="fa fa-file-o nav-icon"></i>
                  <p>Listado de Profesores</p>
                </a>
              </li>
             
            </ul>
			
			  <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=consultarprofesor" class="nav-link active">
                  <i class="fa fa-search nav-icon"></i>
                  <p>Consulta de Profesores</p>
                </a>
              </li>
             
            </ul>
          </li>
		  			<?php } ?>
		  
		  
		  <?php if($usuario->rol==2 ){?>
		   <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-graduation-cap"></i>
              <p>
                Gestión de Alumnos
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=padres" class="nav-link active">
                  <i class="fa fa-plus-circle nav-icon"></i>
                  <p>Creación de Padres</p>
                </a>
              </li>
             
            </ul>
			
			  <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=alumnos" class="nav-link active">
                  <i class="fa fa-list-ul nav-icon"></i>
                  <p>Listado de Alumnos</p>
                </a>
              </li>
             
            </ul>
			
			<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=consultaralumno" class="nav-link active">
                  <i class="fa fa-search nav-icon"></i>
                  <p>Consulta de Alumnos</p>
                </a>
              </li>
             
            </ul>
			
          </li>
		  <?php } ?>
		 
		 
		   <?php if($usuario->rol==2 ){?>
		    <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-align-left"></i>
              <p>
                Reportes
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=reportegrados" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Reporte por Grados</p>
                </a>
              </li>
             
            </ul>
			
			  <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=reportealumnos" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Reporte por Alumnos</p>
                </a>
              </li>
             
            </ul>
			
			<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=reportemateria" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Reporte por Materias</p>
                </a>
              </li>
             
            </ul>
			
			<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=reporteprofesores" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Reporte de Profesores</p>
                </a>
              </li>
             
            </ul>
			<?php } ?>
			
          </li>

		   </ul>
      </nav>
			
			
			
		
          


            
          <?php endif;?>

          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    <?php endif;?>

      <!-- Content Wrapper. Contains page content -->
      <?php if(isset($_SESSION["persona_id"]) || isset($_SESSION["persona_id"])):?>
      <div class="content-wrapper">
      <div class="content">
        <?php View::load("index");?>
        </div>
      </div><!-- /.content-wrapper -->

       
      <?php else:?>
<div class="login-box">
      <div class="login-logo">
        <a href="./">Control<b>Magisterial</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <form action="./?action=processlogin" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" required class="form-control" placeholder="Usuario"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" required class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">

            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->  
      <?php endif;?>


    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="plugins/dist/js/app.min.js" type="text/javascript"></script>

    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".datatable").DataTable({
          "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
        });
      });
    </script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
		  <script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
  </body>
</html>

