<?php
include_once ("models/models.php");
class ocupadomodelo extends Model{


  function __construct() {
    parent::__construct();
  }

  function getturnos(){
    $posible = $this->db->prepare( "SELECT * FROM turnos ORDER BY fecha ASC");
    $posible->execute();
    return $posible->fetchAll(PDO::FETCH_ASSOC);
  }
  function getservicio(){
    $posible = $this->db->prepare( "SELECT * FROM servicios ORDER BY servicio ASC");
    $posible->execute();
    return $posible->fetchAll(PDO::FETCH_ASSOC);
  }
  function getturnoXservicio($idservicio){
    $posible = $this->db->prepare( "SELECT * FROM turnos WHERE fk_id_servicio=? ORDER BY fecha ASC");
    $posible->execute(array($idservicio));
    return $posible->fetchAll(PDO::FETCH_ASSOC);
  }
}
 ?>
