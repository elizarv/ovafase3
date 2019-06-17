<?php
include_once realpath('../../facade/UsuarioFacade.php');

$username = $_POST['codigo'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
UsuarioFacade::insert($username, $password, $nombre, $apellidos);
echo "true";
?>