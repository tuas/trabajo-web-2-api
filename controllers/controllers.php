<?php
////////////////*CONTROLADOR DE SECCIONES*/////////////////////

class controlsesion
{
///////////////////////////////////////////////////////////////////////////////
////////////////*ABRIR SECCION*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

function checksession(){
    if(!isset($_SESSION)){
         session_start();
     }
}

///////////////////////////////////////////////////////////////////////////////
////////////////*CERRAR SECCION*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

function destroysession(){
    if(isset($_SESSION)){
       if (ini_get("session.use_cookies")) {
         $params = session_get_cookie_params();
         setcookie(session_name(), '', time() - 42000,
         $params["path"], $params["domain"],
         $params["secure"], $params["httponly"]
          );
        }

     }
  }
}


 ?>
