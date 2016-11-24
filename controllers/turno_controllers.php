<?php

///////////////////////////////////////////////////////////////////////////////
////////////////*CONTROLADOR DE TURNOS*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

include_once('views/vistaturno.php');
include_once('models/turnoModel.php');
include_once('controllers/error_controllers.php');
include_once('controllers/controllers.php');

class TurnoController extends controlsesion {

  private $vista;
  private $modelo;
  private $fecha;
  private $error;

function __construct(){
    $this->modelo = new tallermodelo();
    $this->vista = new turnoView();
    $this->fecha = new smarty();
    $this->error = new errorController();
  }

function mostrar_turnos(){
    if ($_POST['dia']) {
      $fecha = $_POST['dia'];
      $turno = $this->modelo->getTurnosVacios($fecha);
      $servicio = $this->modelo->getServivios();
      if (isset($_SESSION['user'])){
        $usuario['nombre']=$_SESSION['user'];
        $usuario['email']=$_SESSION['email'];
      }
      else {
        $usuario='';
      }
      $this->vista->mostrarhorario($turno,$fecha,$servicio,$usuario);
    }
    else {
      $this->error->falta('el dia');
    }
  }

function guardarturno(){
      if ($_POST['nombre']) {
        if ($_POST['email']) {
             $turno = $_POST;
             $this->modelo->crearturno($turno);
          }
        else {
        $this->error->falta('el email');
        }
      }
      else {
      $this->error->falta('el nombre');
      }
    }
}

 ?>
