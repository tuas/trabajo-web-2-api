<?php

class  administradorView{

  private $smarty;

  function __construct()
  {
    $this->smarty = new smarty();
  }

  function mostraradministrador($turno,$serv,$recomendado,$usuarios,$imagen){
     $this->smarty->assign('turno',$turno);
     $this->smarty->assign('serv',$serv);
     $this->smarty->assign('recomendado',$recomendado);
     $this->smarty->assign('usuarios',$usuarios);
     $this->smarty->assign('imagen',$imagen);
     $this->smarty->display("templates/funcionadministrador.tpl");
  }

function mostrar_for($action,$turno){
  $this->smarty->assign('turno',$turno);
  $this->smarty->display("templates/".$action.".tpl");
}
function mostrar_for_s($action,$serv){
  $this->smarty->assign('serv',$serv);
  $this->smarty->display("templates/".$action.".tpl");
}
function mostrar_agregar($action){
  $this->smarty->display("templates/".$action.".tpl");
}
function mostrar_for_r($action,$recomendado){
  $this->smarty->assign('recomendado',$recomendado);
  $this->smarty->display("templates/".$action.".tpl");
}
function mostrar_for_u($action,$usuario){
  $this->smarty->assign('usuario',$usuario);
  $this->smarty->display("templates/".$action.".tpl");
}
}
 ?>
