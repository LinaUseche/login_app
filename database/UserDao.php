<?php

include 'Conexion.php';
include '../../models/User.php';

class UserDao extends Conexion
{
  protected static $cnx;

  private static funtion getConexion()
  {
    self::$cnx = Conexion::conectar();
  }

  
  private static function desconectar()
  {
    self::$cnx = null;
  }

  public static function login ($user)
  {

      $query = ("SELECT *
        FROM users
        WHERE email_user = :email_user");

        self::getConexion();

        $email_user = $user->getEmail_user();

        $resultado = self::$cnx->prepare($query);
        $resultado->bindParam(":email_user", $email_user);

        $resultado->execute();

        if ($resultado->rowCount() > 0){
          $row = $resultado->fetch(PDO::FETCH_ASSOC);

        if( password_verify($_POST['pass_user'], $row['pass_user']) ){

          if ($row['email_user'], == $email_user){
            return true;
          }
          
        } else {
          echo "Password o email invalido";
        }
    }
  }
  }
