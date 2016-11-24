<?php
include_once ("models/models.php");

class ModelComentarios extends Model{
  function __construct(){
    parent::__construct();
  }


function getComentarios(){
  $comentarios = $this->db->prepare("SELECT comentarios.*, login.user AS user FROM comentario, login WHERE comentarios.fk_id_login = login.id_login" );
  $comentarios->execute();
  return $comentarios->fetchAll(PDO::FETCH_ASSOC);
}

function getComentario($id_comentario){
  $comentario = $this->db->prepare("SELECT comentarios.*, login.user AS user FROM comentario, login WHERE comentarios.fk_id_login = login.id_login AND  id_comentario = ?" );
  $comentario->execute(array($id_comentario));
  return $comentario->fetch(PDO::FETCH_ASSOC);
}

function eliminarComentario($id_comentario){
  $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id_comentario=?");
  $sentencia->execute(array($id_comentario));
  return $sentencia->rowCount();
}
function crearComentario($id_servicio, $id_login,$comentario,$valoracion){
  $sentencia = $this->db->prepare("INSERT INTO comentarios(fk_id_servicio,fk_id_login,comentario,valoracion) values(?,?,?,?)");
    $sentencia->execute(array($id_servicio, $id_login,$comentario,$valoracion));
    return $this->db->lastInsertId();
}
function getservicioscomentario(){
  $comentario = $this->db->prepare("SELECT * FROM servicios ORDER BY servicio");
  $comentario->execute();
  return $comentario->fetchAll(PDO::FETCH_ASSOC);
}

}
?>
