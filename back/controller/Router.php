<?php

/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    They call me Mr. Espagueti  \\
include_once realpath('UsuarioController.php');

$ruta = $_POST['ruta'];
    	$rtn = "";
    	switch ($ruta) {
           case 'UsuarioInsert':
    		  $rtn = UsuarioController::insert();
    			break;
    		case 'UsuarioList':
    			$rtn = UsuarioController::listAll();
    			break;
        case 'Login':
          $rtn = UsuarioController::login();
          break;
        case 'LoadIndex':
          $rtn = UsuarioController::loadindex();
          break;
        case 'Logout':
          $rtn = UsuarioController::logout();
          break;
        case 'Select':
          $rtn = UsuarioController::select();
          break;
        case 'Save':
          $rtn = UsuarioController::save();
          break;
    		default:
    			$rtn="404 Ruta no encontrada.";
    			break;
    	}

echo $rtn;