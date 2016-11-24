<?php
include_once('models/ocupadoModel.php');
include_once('views/vistaocupado.php');

class ocupadoController{
  private $vista;
  private $modelo;

  function __construct(){
    $this->modelo = new ocupadomodelo();
    $this->vista = new ocupadoView();
  }

  function nuestroservicio(){
    $turno_ocupado = $this->modelo->getturnos();
    $servicios = $this->modelo->getservicio();
    $this->vista->mostrarocupados($turno_ocupado,$servicios);
  }
  function nuevoorden(){
    if(isset($_POST))
      $ordenador = $_POST['id_servicio'];
      $servicios = $this->modelo->getservicio();
      $turno_ocupado = $this->modelo->getturnoXservicio($ordenador);
      $this->vista->mostrarocupados($turno_ocupado,$servicios);
      }
  }



 ?>
