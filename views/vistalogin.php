<?php

/**
 *
 */
class logView{
  private $smarty;

  function __construct() {
    $this->smarty = new smarty();
  }

  function mostrarLogin($permiso){
    $this->smarty->assign('permiso',$permiso);
      $this->smarty->display('templates/logueado.tpl');

  }
  function mostrarformulario(){
    $this->smarty->display('templates/formulario_registro.tpl');
  }
  function errorlogin(){
    $this->smarty->display('templates/login.tpl');
  }

}







 ?>
