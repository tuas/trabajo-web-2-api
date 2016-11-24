<?php

class ocupadoView{
  private $smarty;


  function __construct(){
    $this->smarty = new smarty();
  }
  function mostrarocupados($turno_ocupado,$servicios){
      $this->smarty->assign('turno_ocupado',$turno_ocupado);
      $this->smarty->assign('servicios',$servicios);
      $this->smarty->display('templates/turnosocupados.tpl');
  }


}
 ?>
