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
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-skin-blue.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

  <body class="<?php if(isset($_SESSION["persona_id"]) || isset($_SESSION["client_id"])):?>   sidebar-mini <?php else:?>login-page<?php endif; ?>" >
 
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
                Anuncios
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
                
			  	 <a href="./?view=anuncios_list&id=<?php echo $bim->id;?>" class="nav-link active">		
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
                Tareas
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
                
			  	 <a href="./?view=tareas_list&id=<?php echo $bim->id;?>" class="nav-link active">		
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
                Material de aprendizaje
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
                
			  	 <a href="./?view=material_list&id=<?php echo $bim->id;?>" class="nav-link active">		
				<option value="<?php echo $bim->id;?>"><?php echo $bim->nombre;?></option>
				<?php 	
							endforeach;
				?>
				
				  </datalist>
	  
                </a>
             
            </ul>
          </li>
			  <?php } ?>
		  
 <?php if($usuario->rol==3 ){?>
			  

			  <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Exámenes
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
                
			  	 <a href="./?view=examenes_list&id=<?php echo $bim->id;?>" class="nav-link active">		
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
			 
			 
			 <?php if($usuario->rol==1){?>
			  

			  <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Materias Asignadas
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
                
			  	 <a href="./?view=materias_alumnos&id=<?php echo $bim->id;?>" class="nav-link active">		
				<option value="<?php echo $bim->id;?>"><?php echo $bim->nombre;?></option>
				<?php 	
							endforeach;
				?>
				
				  </datalist>
	  
                </a>
             
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
              <i class="nav-icon fa fa-users"></i>
              <p>
                Administración
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=personal" class="nav-link active">
                  <i class="fa fa-plus-circle nav-icon"></i>
                  <p>Creación de Personal</p>
                </a>
              </li>
             
            </ul>
			
			  <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?view=personal" class="nav-link active">
                  <i class="fa fa-list-ul nav-icon"></i>
                  <p>Listado de Personal</p>
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dispositivos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url('dist/img/1.jpg'); background-attachment:fixed;">
      <div class="overlay-info"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a >Proyecto de Tesis</a></span> <span>Celeste Morán</span></p>
            
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
        </div>
        <div class="row">
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(dist/img/vision.png);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Visión</a></h3>
        					<p class="ftco-social d-flex">
		                
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>llllllllllllllll<br>
						<br>
						<br>
						<br>
						<br>
						</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(dist/img/mision.png);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Misión</a></h3>
        					
        					<p class="ftco-social d-flex">
		                
		              </p>
        				</div>
        			</div>
        			<div class="text">
					<p> <br>
						<br>
						<br>
						<br>
						<br>
						</p>
					
        			</div>
        		</div>
        	</div>
        	
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(dist/img/valores.png);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Nuestros valores
							</a></h3>
        					
        					<p class="ftco-social d-flex">
		                
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Disciplina<br>
						Respeto <br>
						Solidaridad<br> 
						Ecología<br>
						Libertad<br>
						Tolerancia<br>
						</p>
        			</div>
        		</div>
			</div>  
        </div>
      </div>
	</section>
		

    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(dist/img/portada.png); background-attachment:fixed;">
    	<div class="overlay"></div>
      <div class="container">
            <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
              <h2>Ingreso a la plataforma educativa</h2>
              <p>Ingrese el nombre de usuario o email registrado y contraseña asignada.</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-4">
                  <form action="./?action=processlogin" method="post" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" name="username" class="form-control" placeholder="Usuario">
                    </div>
					<br>
				    <div class="form-group d-flex">
                      <input type="password" name="password" class="form-control" placeholder="Password">
					  <input type="submit" value="Ingresar" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
        <div class="row">
          <div class="col-md-12 text-center">
			<br>
            <p>
  Proyecto de Tesis | Celeste Morán | Año <a target="_blank">2020</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html><!-- /.login-box -->  
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

