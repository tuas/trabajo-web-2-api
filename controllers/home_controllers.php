<?php

///////////////////////////////////////////////////////////////////////////////
////////////////*CONTROLADOR DE LA PAGINA*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

include_once('views/vistataller.php');
include_once('models/loginModel.php');
include_once('views/vistalogin.php');
include_once('models/recomendadosModel.php');
include_once('models/ModelComentarios.php');


class TallerController {
  private $vista;
  private $modelo;
  private $serv;

function __construct(){
    $this->vista = new tallerView();
    $this->modelo = new recomendadosmodelo();
    $this->serv = new ModelComentarios();
  }

function home($pagina){
    $this->vista->mostrar($pagina);
  }

function iniciar($pagina){
      $this->vista->actualizar($pagina);
  }

function galeria($pagina){
      $this->vista->actualizar($pagina);
  }

function servicio($pagina){
      $recomendado = $this->modelo->getservicios();
      $imagen = $this->modelo->getimagenes();
      $this->vista->verservicios($recomendado,$imagen);
  }

function turno($pagina){
      $this->vista->actualizar($pagina);
  }
function cargarservicioscomentados(){

  if ((isset($_SESSION))&&(!empty($_SESSION))) {
    $usuario = $_SESSION;
    if (($usuario["privilegio"]=='administrador')||($usuario["privilegio"]=='dueño')) {
      $permiso = 'total';
    }
    else {
      if ($usuario["privilegio"]=='cliente') {
        $permiso = 'cliente';
      }
      else {
        $permiso = '';
      }
    }
  }
  else {
    $permiso = '';
    $usuario = '';
  }
  $servicios = $this->serv->getservicioscomentario();
  $this->vista->mostrarservicios($servicios,$usuario,$permiso);

}

}
 ?>
