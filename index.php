<?php
  include_once realpath('back/dto/Usuario.php');
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location: login.html');
  }else if(unserialize($_SESSION['usuario'])->getCodigo() == 'admin'){
    header('Location: admin.php');
  }
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ovafase3</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="public/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="public/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="public/css/sweetalert.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="public/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="public/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="public/jvectormap/jquery-jvectormap.css">
  <link rel="shortcut icon" href="public/img/icon.jpg">
                <link type="text/css" href="activities/inSopa/inSopa_resources/css/ardoraSopa.css" rel="stylesheet" />

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>O</b>va</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Contenido</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    	<!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="javascript:logout()"><i class="fa fa-power-off"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <!--  <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        -->
        <li>
          <a href="javascript:cargarIntroduccion()">
            <i class="fa fa-book"></i><span>Introducción</span>
          </a>
        </li>
        <li>
          <a href="javascript:cargarCiclo()">
            <i class="fa fa-spinner"></i><span>Ciclo de vida</span>
          </a>
        </li>
        <li>
          <a href="javascript:cargarRequerimientos()">
            <i class="fa fa-pencil"></i><span>Análisis de requerimientos</span>
          </a>
        </li>
        <li class="treeview">
          <a href="javascript:cargarSopa()">
            <i class="fa fa-database"></i><span>Modelado de diagramas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="javascript:cargarClases()"><i class="fa fa-circle-o"></i> Diagrama de clases</a></li>
            <li><a href="javascript:cargarSecuencia()"><i class="fa fa-circle-o"></i> Diagrama de secuencias</a></li>
            <li><a href="javascript:cargarCasos()"><i class="fa fa-circle-o"></i> Diagrama de casos de uso</a></li>
            <li><a href="javascript:cargarBaseDatos()"><i class="fa fa-circle-o"></i> Diagrama de base de datos</a></li>
          </ul>
        </li>
        <li>
          <a href="javascript:cargarTest()">
            <i class="fa fa-pencil"></i><span>Realizar test</span>
          </a>
        </li>
      </ul>
    </section>


  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fase 3: Diseño computacional de la metodología de Diseño del software
      </h1>
    </section>

    <!-- Main content -->
    <section class="content"id="remp" name="remp">
      <img src="public/img/metodologias.jpg">

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong><a href="#" class="pull-right hidden-xs">Elizabeth Ramirez Villamizar</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="public/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/jquery-ui/jquery-ui.min.js"></script>
<script src="public/js/Ajax.js"></script>
<script src="public/js/ViewManager.js"></script>
<script src="public/js/otrasjs.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="public/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="public/raphael/raphael.min.js"></script>
<script src="public/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="public/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="public/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="public/moment/min/moment.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script>

</body>
</html>
