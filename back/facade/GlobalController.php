<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La primera regla de Anarchy es no hablar de Anarchy  \\
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