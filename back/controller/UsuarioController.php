<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Alza el puño y ven! ¡En la hoguera hay de beber!  \\
include_once realpath('../facade/UsuarioFacade.php');


class UsuarioController {

    public static function insert(){
        $codigo = strip_tags($_POST['codigo']);
        $nombre = strip_tags($_POST['nombre']);
        $apellidos = strip_tags($_POST['apellidos']);
        $password = strip_tags($_POST['password']);
        UsuarioFacade::insert($codigo, $nombre, $apellidos, $password);
        return true;
    }

    public static function listAll(){
        $list=UsuarioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Usuario) {	
	       $rta.="{
	    \"codigo\":\"{$Usuario->getcodigo()}\",
	    \"nombre\":\"{$Usuario->getnombre()}\",
	    \"apellidos\":\"{$Usuario->getapellidos()}\",
	    \"nota\":\"{$Usuario->getnota()}\",
	    \"intentos\":\"{$Usuario->getintentos()}\",
	    \"password\":\"{$Usuario->getpassword()}\"
	       },";
        }

        if($rta!=""){
	       $rta = substr($rta, 0, -1);
	       $msg="{\"msg\":\"exito\"}";
        }else{
	       $msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	       $rta="{\"result\":\"No se encontraron registros.\"}";	
        }
        return "[{$msg},{$rta}]";
    }

    public static function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usuario = UsuarioFacade::login($username, $password);
        if($usuario!=null){
            session_start();
            $_SESSION["usuario"]=serialize($usuario);
            return true;
        }else{
            return false;
        }
    }

    public static function select(){
        session_start();
        $username = unserialize($_SESSION["usuario"])->getCodigo();
        $usuario = UsuarioFacade::select($username);
        if($usuario->getNota() != NULL){
            return true;
        }else{
            return false;
        }
    }

    public static function logout(){
        session_start();
        session_destroy();
    }

    public static function save(){
        session_start();
        $codigo = unserialize($_SESSION['usuario'])->getCodigo();
        $nota = $_POST['nota'];
        $usuario = UsuarioFacade::select($codigo);
        $intentos = $usuario->getIntentos();
        $notaAnt = $usuario->getNota();
        $nota = max($nota, $notaAnt);
        $usuario = UsuarioFacade::update($codigo, $nota, $intentos+1);
        return true;
    }

}
//That`s all folks!