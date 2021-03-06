<?php

///////////////////////////////////////////////////////////////////////////////
////////////////*MANEJO DE TABLA USUARIO*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

class loginmodelo{
  private $db;
  private $ad;

  function __construct(){
    $this->ad= [''];
    $this->db = new PDO('mysql:host=localhost;dbname=tallerchapista;charset=utf8', 'root', 'root');
  }

///////////////////////////////////////////////////////////////////////////////
////////////////*CONSULTA TABLA USUARIOS*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

function getlogin($usuario) {
   $sentencia = $this->db->prepare("SELECT * FROM login WHERE user='$usuario'");
   $sentencia->execute(array($usuario));
   return $sentencia->fetch(PDO::FETCH_ASSOC);
 }

///////////////////////////////////////////////////////////////////////////////
////////////////*INSERTA NUEVO USUARIO*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

function nuevousuario($usuario){
   $tipousuario = 'cliente';
   $nombre = $usuario['nombre'];
   $email = $usuario['email'];
   $password = $usuario['password'];
   $agregar = $this->db->prepare("INSERT INTO login(user,pass,t_user,nombre) VALUES(?,?,?,?)");
   $agregar->execute(array($email,$password,$tipousuario,$nombre));
 }

///////////////////////////////////////////////////////////////////////////////

}

 ?>
