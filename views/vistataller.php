<?php
class tallerView
{
  private $smarty;


  function __construct()
  {
    $this->smarty = new smarty();
  }

  function mostrar($taller){
    $this->smarty->display('templates/home.tpl');
  }
  function actualizar($action){
    $this->smarty->display("templates/".$action.".tpl");
  }
  function verservicios($recomendado,$imagen){
    $this->smarty->assign('recomendado',$recomendado);
    $this->smarty->assign('imagen',$imagen);
    $this->smarty->display('servicios.tpl');
  }
}

 ?>
