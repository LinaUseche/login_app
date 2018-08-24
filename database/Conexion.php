<?php

class Conexion  {

  public static function conectar(){
    try {
      $cn = new PDO("mysql:host=localhost;dbname=scripwebDB", "root", "");

      return $cn;

    } catch (Exeption $ex) {
        die($ex->getMessage());
    }

  }
}
