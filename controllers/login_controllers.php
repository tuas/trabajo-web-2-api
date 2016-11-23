<?php

///////////////////////////////////////////////////////////////////////////////
////////////////*CONTROLADOR DE LOGIN*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

include_once('views/vistalogin.php');
include_once('controllers/error_controllers.php');
include_once('models/loginModel.php');
include_once('controllers/controllers.php');

class loginController  extends controlsesion {
  private $login;
  private $log;
  private $error;

function __construct()
{
  $this->login = new loginmodelo();
  $this->log = new logView();
  $this->error = new errorController();
  $this->checksession();

}

///////////////////////////////////////////////////////////////////////////////
////////////////*CERRADO DE SESION*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////


function logout(){

 $this->destroysession();
 $this->log->errorlogin();

}

///////////////////////////////////////////////////////////////////////////////
////////////////*CHEQUEO DE LOGUEADO CORRECTO*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////


function checklogin(){

  if(isset($_POST["username"]) && isset($_POST["password"])){
    $user = $_POST["username"];
    $pass = md5($_POST["password"]);
    if (($user!='')&&($pass!='')){
    $usuarioRegistrado = $this->login->getlogin($user);
    if ($usuarioRegistrado){
              $passwordRegistrada = $usuarioRegistrado["pass"];
              if ($pass == $passwordRegistrada){
                  $_SESSION["id"] = $usuarioRegistrado["id_login"];
                  $_SESSION["user"] = $usuarioRegistrado["nombre"];
                  $_SESSION["email"] = $usuarioRegistrado["user"];
                  $_SESSION["privilegio"] = $usuarioRegistrado["t_user"];
                  if ($_SESSION["privilegio"]=="administrador") {
                         $permiso=TRUE;
                           }
                  else{
                         $permiso=FALSE;
                     }
                  $this->log->mostrarLogin($permiso);
                }
              else {
                   $this->error->mostrar_error('contraseña es incorrecta');
                   $this->log->errorlogin();
                    }
              }
  else{
        $this->error->mostrar_error('el usuario  no existe');
         $this->log->errorlogin();
    }
  }
  else{
        $this->error->mostrar_error('ingrese usuario y contraseña');
         $this->log->errorlogin();
    }
}
}


///////////////////////////////////////////////////////////////////////////////
////////////////*FORMULARIO DE REGISTRO*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

function form_registrar(){
  $this->log->mostrarformulario();
}

function registrar(){
  if(isset($_POST)) {
    $usuario=$_POST;
    $usuario["password"]= md5($_POST["password"]);
    if ($usuario['nombre']){
       if ($usuario['email']){
         if ($usuario['password']) {
            $this->login->nuevousuario($usuario);
           }
           else {
             $this->error->mostrar_error('no ingreso una servicio valida');

           }
       }

       else{
           $this->error->mostrar_error('no ingreso una email valida');
       }
    }
    else{
        $this->error->mostrar_error('no ingreso una nombre valida');
    }
  }
  $this->log->errorlogin();
}
}

///////////////////////////////////////////////////////////////////////////////

 ?>
