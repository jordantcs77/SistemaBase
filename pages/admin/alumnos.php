<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>San Andrés | SIS </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="shortcut icon" href="../../dist/img/san_andres_logo.png" type="image/x-icon">      
</head>
<!--
OPCIONES DE BODY TAG:
=================
Aplicar una o más de las siguientes clases para obtener el
efecto deseado
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red-light sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="../../home_adm.php" class="logo">
      <!-- mini logotipo para la barra lateral mini 50x50 píxeles -->
      <span class="logo-mini"><b>S</b>AS</span>
      <!-- logo para estado regular y dispositivos móviles -->
      <span class="logo-lg"><img src="../../dist/img/san_andres_logo.png" alt="Logo image"><b> San Andres</b> SIS</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
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
              <img src="../../dist/img/usser_pedro.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Pedro Luis</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../../dist/img/usser_pedro.jpg" class="img-circle" alt="User Image">

                <p>
                  Pedro Luis - Web Developer
                  <small>Miembro desde Jun. 2018</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Mi Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (izquierdo) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/usser_pedro.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Pedro Luis</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> En Linea</a>
        </div>
      </div>

      <!-- inicio formulario buscar (Opcional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.fin del formulario buscar -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Principal</li>
        <!-- Optionally, you can add icons to the links -->
      <li><a href="../../pages/admin/ciclo.php"><i class="fa fa-mortar-board"></i> <span>Ciclo Escolar</span></a></li>
      <li><a href="../../pages/admin/matricula.php"><i class="fa fa-pencil-square-o"></i> <span>Matrícula</span></a></li>
      <li><a href="../../pages/admin/alumnos.php"><i class="fa fa-male"></i> <span>Alumnos</span></a></li>
      <li><a href="../../pages/admin/docentes.php"><i class="fa fa-suitcase"></i> <span>Docentes</span></a></li>
      <li><a href="../../pages/admin/grupos.php"><i class="fa fa-calendar-plus-o"></i> <span>Grupos</span></a></li>
      <li><a href="../../pages/admin/grados.php"><i class="fa fa-group"></i> <span>Grados</span></a></li>
      <li><a href="../../pages/admin/cursos.php"><i class="fa fa-book"></i> <span>Cursos</span></a></li>
      <li><a href="../../pages/admin/recursos.php"><i class="fa fa-folder-open"></i> <span>Recursos</span></a></li>
      <li><a href="finanzas"><i class="fa fa-area-chart"></i> <span>Finanzas</span></a></li>
      <li><a href="../../pages/admin/notas.php"><i class="fa fa-file-text-o"></i> <span>Reg. Notas</span></a></li>
      <li><a href="../../pages/admin/reportes.php"><i class="fa fa-file-pdf-o"></i> <span>Reportes</span></a></li>

 <!-- vista triple (opcional) -->
    
   <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
<!-- fin vista triple (opcional) -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Alumnos 
        <small>admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="https://www.youtube.com/watch?v=Wdxx6bYzDCE" target="_blank"><i class="fa fa-youtube-play"></i> Turorial de Uso</a></li>
      </ol>
    </section>

    <!-- contenido de la pagina -->
<?php
include "../../MVC/conexion.php";
$cn=conectar_bd();

$sql_list="SELECT * FROM alumnos WHERE estado=1";
$resList=mysqli_query($cn,$sql_list);
?>
    <section class="content container-fluid">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Alumnos de la I.E.P. San Andrés</h3>
            </div>
   <div class="btn">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo</button>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Edad:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
</div>
         <!--   <div class="btn">
              <button type="button" class="btn btn-block btn-primary">Nuevo</button>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="dataTables_length" id="example1_length">
                      <label>Show 
                        <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option><option value="100">100
                          </option>
                        </select> entries
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div id="example1_filter" class="dataTables_filter">
                      <label>Buscar:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row"><div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Nombre</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Apellido</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Edad</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Estado</th>
                </tr>
                </thead>
<?php
while($row=mysqli_fetch_array($resList)){
  echo "
                <tbody>
                <tr role='row' class='odd'>
                  <td class='sorting_1'>".$row['id']."</td>
                  <td>".$row['nombre']."</td>
                  <td>".$row['apellido']."</td>
                  <td>".$row['edad']."</td>
                  <td>".$row['estado']."</td>
              <td><a href='modificar.php?id=".$row['id']."'><button type='button' class='btn btn-success'>modificar</button></a></td>
              <td><a href='eliminar.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Eliminar</button></a></td>
                </tr>
              </tbody>
              "; 
              }
            ?>
              </table>
              <?php

            ?>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Mostrando 1 a 10 de 57 entradas</div>
            </div>
            <div class="col-sm-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                <ul class="pagination">
                  <li class="paginate_button previous disabled" id="example1_previous">
                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous
                    </a>
                  </li>
                  <li class="paginate_button active">
                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1
                    </a>
                  </li>
                  <li class="paginate_button ">
                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2
                    </a>
                  </li>
                  <li class="paginate_button ">
                    <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3
                    </a>
                  </li>
                  <li class="paginate_button ">
                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4
                    </a>
                  </li>
                  <li class="paginate_button ">
                    <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5
                    </a>
                  </li>
                  <li class="paginate_button ">
                    <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6
                    </a>
                  </li>
                  <li class="paginate_button next" id="example1_next">
                    <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
            </div>
            <!-- /.box-body -->
          </div>


      <!--------------------------
        | Contenido de la página |
        -------------------------->

    </section>
    <!-- /.---- fin del contenido de la pagin------>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
 
    <!-- Default to the left -->
  <center> <p>© <?php echo date("Y"); ?> <a href="https://www.facebook.com/prasoftsystems/" target="_blank">
          <span class="marked">Prasoft Systems</span>
        </a> - Todos los derechos reservados &middot; <a href="#">Privacidad</a> &middot; <a href="#">Términos</a></p> </center>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Actividad Reciente</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Pedro Luis's Birthday</h4>

                <p>será el 5 de Mayo</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Progreso de Tareas</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Diseño de plantilla personalizada
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">50%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Contenido de la pestaña de estadísticas</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">Configuración general
</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Reportar el uso del panel
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Parte de la información sobre esta opción de configuración general
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>