<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Quédate con quien te quiera por tu back-end, no por tu front-end  \\
    require_once realpath('../dao/factory/FactoryDao.php');

/**
   * Para su comodidad, defina aquÃ­ el gestor de conexiÃ³n predilecto para su proyecto
   */
    define("DEFAULT_GESTOR", FactoryDao::$NULL_GESTOR);
  /**
   * Para su comodidad, defina aquÃ­ el nombre de base de datos predilecto para su proyecto
   */    
    define("DEFAULT_DBNAME", "null");

//That`s all folks!