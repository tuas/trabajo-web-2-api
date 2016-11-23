<?php

///////////////////////////////////////////////////////////////////////////////
////////////////*CONTROLADOR DE LA PAGINA*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

include_once('views/vistataller.php');
include_once('models/loginModel.php');
include_once('views/vistalogin.php');
include_once('models/recomendadosModel.php');

class TallerController {
  private $vista;
  private $modelo;
  private $base;

function __construct(){
    $this->vista = new tallerView();
    $this->modelo = new recomendadosmodelo();
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

}
 ?>
