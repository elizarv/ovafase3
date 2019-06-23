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



<link type="text/css" href="inPanel_resources/css/ardoraPanel.css" rel="stylesheet" />
<script language="javascript" type="text/javascript" src="inPanel_resources/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="inPanel_resources/js/jquery-ui.min.js"></script>
<script language="javascript" type="text/javascript" src="inPanel_resources/js/jquery.ui.touch-punch.min.js"></script>
<script language="javascript" type="text/javascript" src="inPanel_resources/js/ardoraPanelCFG.js"></script>
<script language="javascript" type="text/javascript" src="inPanel_resources/js/ardoraScorm.js"></script>
<script language="javascript" type="text/javascript" src="inPanel_resources/js/ardoraPanel.js"></script>
<script language="javascript" type="text/javascript" src="inPanel_resources/js/ardoraTab.js"></script>
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
          Diagrama de clases
        </h3>
        
      </section>

      <!-- Main content -->
      <section class="content">
        
        <div class="box">
          <div class="box-header with-border">
            <h4><p>Digite la cardinalidad de la relación entre clases en cada punto que se indique.<br>
Recuerde que los tipos de cardinalidad pueden expresarse de la siguiente manera:<br>
1<br>
1..n<br>
0..n</p></h4>
          </div>
          <div class="box-body">
            <div id="ardoraMain">
<div id="ardoraEnu"></div>
  <div id="ardoraAct">
<div id="txt1" class="txtCell"><input type="text" name="inputTxt1" id="inputTxt1" class="txtCell_input"/></div>
<div id="txt2" class="txtCell"><input type="text" name="inputTxt2" id="inputTxt2" class="txtCell_input"/></div>
<div id="txt3" class="txtCell"><input type="text" name="inputTxt3" id="inputTxt3" class="txtCell_input"/></div>
<div id="txt4" class="txtCell"><input type="text" name="inputTxt4" id="inputTxt4" class="txtCell_input"/></div>
<div id="txt5" class="txtCell"><input type="text" name="inputTxt5" id="inputTxt5" class="txtCell_input"/></div>
<div id="txt6" class="txtCell"><input type="text" name="inputTxt6" id="inputTxt6" class="txtCell_input"/></div>
<div id="txt7" class="txtCell"><input type="text" name="inputTxt7" id="inputTxt7" class="txtCell_input"/></div>
<div id="txt8" class="txtCell"><input type="text" name="inputTxt8" id="inputTxt8" class="txtCell_input"/></div>
<div id="txt9" class="txtCell"><input type="text" name="inputTxt9" id="inputTxt9" class="txtCell_input"/></div>
<div id="txt10" class="txtCell"><input type="text" name="inputTxt10" id="inputTxt10" class="txtCell_input"/></div>
<div id="txt11" class="txtCell"><input type="text" name="inputTxt11" id="inputTxt11" class="txtCell_input"/></div>
<div id="txt12" class="txtCell"><input type="text" name="inputTxt12" id="inputTxt12" class="txtCell_input"/></div>
<canvas id="ardoraActCanvas" width="2px" height="2px"></canvas>
<canvas id="ardoraActCanvasAnim" width="2px" height="2px"></canvas>
  </div>
<div id="ardoraTab">
  <canvas id="ardoraTabCanvas" width="70" height="137"></canvas>
  <div id="buttonOk"><canvas id="buttonOkCanvas" width="70" height="70"></canvas></div>
</div></div>
          </div>
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
