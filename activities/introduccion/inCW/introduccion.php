
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


<link type="text/css" href="inCW16062019214145_resources/css/ardoraCW.css" rel="stylesheet" />
<script language="javascript" type="text/javascript" src="inCW16062019214145_resources/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="inCW16062019214145_resources/js/jquery-ui.min.js"></script>
<script language="javascript" type="text/javascript" src="inCW16062019214145_resources/js/jquery.ui.touch-punch.min.js"></script>
<script language="javascript" type="text/javascript" src="inCW16062019214145_resources/js/ardoraCWCFG.js"></script>
<script language="javascript" type="text/javascript" src="inCW16062019214145_resources/js/ardoraScorm.js"></script>
<script language="javascript" type="text/javascript" src="inCW16062019214145_resources/js/ardoraCW.js"></script>
<script language="javascript" type="text/javascript" src="inCW16062019214145_resources/js/ardoraTab.js"></script>
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
          Introducción a la Fase 3: Diseño computacional
        </h3>
        
      </section>

      <!-- Main content -->
      <section class="content">
        
        <div class="box">
          <div class="box-header with-border">
            <h4><p>Digite la palabra que cumpla con el concepto dado. <br>
Seleccione el cuadro donde desee comenzar la palabra. <br>
Las palabras se deben escribir de izquiera a derecha o de arriba hacia abajo. <br>
Si desea cambiar la dirección para escribir, de click en el botón superior derecho "ab".<br>
</p></h4>
          </div>
          <div class="box-body">
            <div id="ardoraMain">
<div id="ardoraEnu"></div>
  <div id="ardoraAct">
  <table id="tableGame">
<tr>
<td class="activeCell"><input id="C0_0" name="C0_0" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C1_0" name="C1_0" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C2_0" name="C2_0" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C3_0" name="C3_0" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C4_0" name="C4_0" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C5_0" name="C5_0" type="text" class="cell" maxlength="1"/></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
</tr>
<tr>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="activeCell"><input id="C3_1" name="C3_1" type="text" class="cell" maxlength="1"/></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
</tr>
<tr>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="activeCell"><input id="C3_2" name="C3_2" type="text" class="cell" maxlength="1"/></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
</tr>
<tr>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="activeCell"><input id="C3_3" name="C3_3" type="text" class="cell" maxlength="1"/></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
</tr>
<tr>
<td class="activeCell"><input id="C0_4" name="C0_4" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C1_4" name="C1_4" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C2_4" name="C2_4" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C3_4" name="C3_4" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C4_4" name="C4_4" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C5_4" name="C5_4" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C6_4" name="C6_4" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C7_4" name="C7_4" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C8_4" name="C8_4" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C9_4" name="C9_4" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C10_4" name="C10_4" type="text" class="cell" maxlength="1"/></td>
</tr>
<tr>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="activeCell"><input id="C3_5" name="C3_5" type="text" class="cell" maxlength="1"/></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
</tr>
<tr>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="activeCell"><input id="C3_6" name="C3_6" type="text" class="cell" maxlength="1"/></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
</tr>
<tr>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="activeCell"><input id="C3_7" name="C3_7" type="text" class="cell" maxlength="1"/></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
</tr>
<tr>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="activeCell"><input id="C2_8" name="C2_8" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C3_8" name="C3_8" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C4_8" name="C4_8" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C5_8" name="C5_8" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C6_8" name="C6_8" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C7_8" name="C7_8" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C8_8" name="C8_8" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C9_8" name="C9_8" type="text" class="cell" maxlength="1"/></td>
<td class="activeCell"><input id="C10_8" name="C10_8" type="text" class="cell" maxlength="1"/></td>
</tr>
<tr>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
<td class="hidetd"></td>
</tr>
</table>
<canvas id="ardoraActCanvas" width="2px" height="2px"></canvas>
<div id="buttonDir"><canvas id="ardoraButtonDirCanvas" width="40px" height="40px"></canvas></div>
<div id="defIma"></div>
  </div>
<div id="ardoraTab">
  <canvas id="ardoraTabCanvas" width="70" height="137"></canvas>
  <div id="buttonOk"><canvas id="buttonOkCanvas" width="70" height="70"></canvas></div>
</div></div>
<div id="ardoraAlumSCORM"><p></p></div>
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
