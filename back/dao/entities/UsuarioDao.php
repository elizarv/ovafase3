<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Trabajo individual singifica ganancia individual  \\

include_once realpath('../dao/interfaz/IUsuarioDao.php');
include_once realpath('../dto/Usuario.php');

class UsuarioDao implements IUsuarioDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Usuario en la base de datos.
     * @param usuario objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($usuario){
      $codigo=$usuario->getCodigo();
$nombre=$usuario->getNombre();
$apellidos=$usuario->getApellidos();
$password=$usuario->getPassword();

      try {
          $sql= "INSERT INTO `usuario`( `codigo`, `nombre`, `apellidos`, `password`)"
          ."VALUES ('$codigo','$nombre','$apellidos','$password')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($usuario){
      $codigo=$usuario->getCodigo();

      try {
          $sql= "SELECT `codigo`, `nombre`, `apellidos`, `nota`, `intentos`, `password`"
          ."FROM `usuario`"
          ."WHERE `codigo`='$codigo'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $usuario->setCodigo($data[$i]['codigo']);
          $usuario->setNombre($data[$i]['nombre']);
          $usuario->setApellidos($data[$i]['apellidos']);
          $usuario->setNota($data[$i]['nota']);
          $usuario->setIntentos($data[$i]['intentos']);
          $usuario->setPassword($data[$i]['password']);

          }
      return $usuario;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Usuario en la base de datos.
     * @param usuario objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($usuario){
      $codigo=$usuario->getCodigo();
$nota=$usuario->getNota();
$intentos=$usuario->getIntentos();

      try {
          $sql= "UPDATE `usuario` SET `nota`='$nota' ,`intentos`='$intentos' WHERE `codigo`='$codigo' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($usuario){
      $codigo=$usuario->getCodigo();

      try {
          $sql ="DELETE FROM `usuario` WHERE `codigo`='$codigo'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @return ArrayList<Usuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `codigo`, `nombre`, `apellidos`, `nota`, `intentos`, `password`"
          ."FROM `usuario`"
          ."WHERE codigo <> 'admin'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $usuario= new Usuario();
          $usuario->setCodigo($data[$i]['codigo']);
          $usuario->setNombre($data[$i]['nombre']);
          $usuario->setApellidos($data[$i]['apellidos']);
          $usuario->setNota($data[$i]['nota']);
          $usuario->setIntentos($data[$i]['intentos']);
          $usuario->setPassword($data[$i]['password']);

          array_push($lista,$usuario);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }



public function login($usuario){
      $username=$usuario->getCodigo();
$password=$usuario->getPassword();

      $usuario = new Usuario();
      try {
          $sql= "SELECT `codigo`, `password`, `nombre`, `apellidos`"
          ."FROM `usuario`"
          ."WHERE `codigo`='$username' AND`password`='$password'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $usuario->setCodigo($data[$i]['codigo']);
          $usuario->setPassword($data[$i]['password']);
          $usuario->setNombre($data[$i]['nombre']);
          $usuario->setApellidos($data[$i]['apellidos']);

      return $usuario;
          }
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }


    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That`s all folks!