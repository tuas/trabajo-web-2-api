<?php

///////////////////////////////////////////////////////////////////////////////
////////////////*CONTROLADOR DE ERRORE*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

include_once('views/vistaerror.php');

class errorController{

private $vista;

function __construct(){
    $this->vista = new errorView();
    }
function fallo(){
      $this->vista->mostrar_error("404 pagina no encontrada","danger");
    }
function falta($error){
      $this->vista->mostrar_error("se produjo un error cuando introdujo $error","danger");
    }
function mostrar_error($error){
      $this->vista->mostrar_error("$error","danger");
    }


}
 ?>
