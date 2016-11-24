<?php

class errorView{
  private $smarty;

  function __construct() {
    $this->smarty = new smarty();
  }

  function mostrar_error($mensaje){
    echo $mensaje;
  }




}



 ?>
