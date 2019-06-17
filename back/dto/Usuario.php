<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora con 25% menos groserías  \\


class Usuario {

  private $codigo;
  private $nombre;
  private $apellidos;
  private $nota;
  private $intentos;
  private $password;

    /**
     * Constructor de Usuario
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a codigo
     * @return codigo
     */
  public function getCodigo(){
      return $this->codigo;
  }

    /**
     * Modifica el valor correspondiente a codigo
     * @param codigo
     */
  public function setCodigo($codigo){
      $this->codigo = $codigo;
  }
    /**
     * Devuelve el valor correspondiente a nombre
     * @return nombre
     */
  public function getNombre(){
      return $this->nombre;
  }

    /**
     * Modifica el valor correspondiente a nombre
     * @param nombre
     */
  public function setNombre($nombre){
      $this->nombre = $nombre;
  }
    /**
     * Devuelve el valor correspondiente a apellidos
     * @return apellidos
     */
  public function getApellidos(){
      return $this->apellidos;
  }

    /**
     * Modifica el valor correspondiente a apellidos
     * @param apellidos
     */
  public function setApellidos($apellidos){
      $this->apellidos = $apellidos;
  }
    /**
     * Devuelve el valor correspondiente a nota
     * @return nota
     */
  public function getNota(){
      return $this->nota;
  }

    /**
     * Modifica el valor correspondiente a nota
     * @param nota
     */
  public function setNota($nota){
      $this->nota = $nota;
  }
    /**
     * Devuelve el valor correspondiente a intentos
     * @return intentos
     */
  public function getIntentos(){
      return $this->intentos;
  }

    /**
     * Modifica el valor correspondiente a intentos
     * @param intentos
     */
  public function setIntentos($intentos){
      $this->intentos = $intentos;
  }

  public function getPassword(){
      return $this->password;
  }

  public function setPassword($pw){
      $this->password = $pw;
  }


}
//That`s all folks!