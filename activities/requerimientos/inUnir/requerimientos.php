
<?php
  include_once realpath('../../../back/dto/Usuario.php');
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location: ../../../login.html');
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
  <link rel="stylesheet" href="../../../public/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../public/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../public/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../../public/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/jquery.dataTables.min.css">



<link type="text/css" href="inUnir16062019192019_resources/css/ardoraUnir.css" rel="stylesheet" />
<script language="javascript" type="text/javascript" src="inUnir16062019192019_resources/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="inUnir16062019192019_resources/js/jquery-ui.min.js"></script>
<script language="javascript" type="text/javascript" src="inUnir16062019192019_resources/js/jquery.ui.touch-punch.min.js"></script>
<script language="javascript" type="text/javascript" src="inUnir16062019192019_resources/js/ardoraUnirCFG.js"></script>
<script language="javascript" type="text/javascript" src="inUnir16062019192019_resources/js/ardoraScorm.js"></script>
<script language="javascript" type="text/javascript" src="inUnir16062019192019_resources/js/ardoraUnir.js"></script>
<script language="javascript" type="text/javascript" src="inUnir16062019192019_resources/js/ardoraTab.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<link rel="shortcut icon" href="../../../public/img/icon.jpg">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav" onLoad="loadPage()" onbeforeunload="unloadPage()" onUnload="unloadPage()">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand"><b>Ova</b>Fase3</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- /.navbar-collapse -->
        
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h3>
          Análisis de requerimientos
        </h3>
        
      </section>

      <!-- Main content -->
      <section class="content">
        
        <div class="box">
          <div class="box-header with-border">
            <h4>Relacione las columnas de los extremos con la del centro, indicando a que tipo de requerimiento pertenecen.</h4>
          </div>
          <div class="box-body">
            <div id="ardoraMain">
<div id="ardoraEnu"></div>
  <div id="ardoraAct">
<div id="table1"><div class="cell">
<div id="conten1_1" class="conten"></div>
<div id="conten1_2" class="conten"></div>
<div id="conten1_3" class="conten"></div>
<div id="conten1_4" class="conten"></div>
<div id="conten1_5" class="conten"></div>
<div id="conten1_6" class="conten"></div>
<div id="conten1_7" class="conten"></div>
<div id="conten1_8" class="conten"></div>
<div id="conten1_9" class="conten"></div>
<div id="conten1_10" class="conten"></div>
</div></div>
<div id="table2"><div class="cell">
<div id="conten2_1" class="conten"></div>
<div id="conten2_2" class="conten"></div>
</div></div>
<div id="table3"><div class="cell">
<div id="conten3_1" class="conten"></div>
<div id="conten3_2" class="conten"></div>
<div id="conten3_3" class="conten"></div>
<div id="conten3_4" class="conten"></div>
<div id="conten3_5" class="conten"></div>
<div id="conten3_6" class="conten"></div>
<div id="conten3_7" class="conten"></div>
<div id="conten3_8" class="conten"></div>
</div></div>
<canvas id="joinCanvas" width="800px" height="500px"></canvas>
<canvas id="joinCanvasDo" width="800px" height="500px"></canvas>
<canvas id="ardoraActCanvas" width="2px" height="2px"></canvas>
  </div>
<div id="ardoraTab">
  <canvas id="ardoraTabCanvas" width="70" height="137"></canvas>
  <div id="buttonOk"><canvas id="buttonOkCanvas" width="70" height="70"></canvas></div>
</div></div>
<div id="ardoraAlumSCORM"><p></p></div>


          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
      </div>
      <strong><a href="#" class="pull-right hidden-xs">Elizabeth Ramirez Villamizar</a>.</strong>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../../public/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../../public/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../../public/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../../public/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../public/dist/js/demo.js"></script>
<script type="text/javascript" src="../../../public/js/jquery.dataTables.min.js"></script>

<script src="../../../public/js/Ajax.js"></script>
<script src="../../../public/js/ViewManager.js"></script>
<script src="../../../public/js/otrasjs.js"></script>
</body>
</html>
