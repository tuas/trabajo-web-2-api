<?php
include_once ("models/models.php");
///////////////////////////////////////////////////////////////////////////////
////////////////*MANEJO DE BASE DE DATOS DE FUNCIONES DE ADMINISTRADOR*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////


class administradormodelo extends Model{

  private $ad;
  function __construct(){
    $this->ad= [''];
    parent::__construct();
  }

///////////////////////////////////////////////////////////////////////////////
////////////////*ACTUALIZA, AGREGA, ELIMINA Y CONSULTA TABLA USUARIOS*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

function getusuarios(){
  $posible = $this->db->prepare( "SELECT * FROM login ORDER BY nombre ASC");
  $posible->execute();
  return $posible->fetchAll(PDO::FETCH_ASSOC);
}
function deleusuario($idusuario){
  $prohivido = 'dueño';
  $sentencia = $this->db->prepare("DELETE FROM login WHERE id_login=? AND t_user!=?");
  $sentencia->execute(array($idusuario,$prohivido));
}
function editusuariodb($usuario){
  $prohivido = 'dueño';
  $id = $usuario['id_usuario'];
  $nombre = $usuario['nombre'];
  $email= $usuario['email'];
  $pass = md5($usuario['password']);
  $tipousuario = $usuario['t_user'];
  $sentencia = $this->db->prepare("UPDATE login SET user=?, pass=?, t_user=?, nombre=? WHERE id_login=?AND t_user!=?");
  $sentencia->execute(array($email,$pass,$tipousuario,$nombre,$id,$prohivido));
}
 function meterusuario($usuario){
   $nombre = $usuario['nombre'];
   $email= $usuario['email'];
   $pass = md5($usuario['password']);
   $tipousuario = $usuario['t_user'];
   $sentencia = $this->db->prepare("INSERT INTO login(user,pass,t_user,nombre) VALUES(?,?,?,?)");
   $sentencia->execute(array($email,$pass,$tipousuario,$nombre));
  }

///////////////////////////////////////////////////////////////////////////////
////////////////*ACTUALIZA, AGREGA, ELIMINA Y CONSULTA TABLA TURNO*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

 function getturnos(){

   $posible = $this->db->prepare( "select * from turnos order by nombre ASC");
   $posible->execute();
   return $posible->fetchAll(PDO::FETCH_ASSOC);
 }
 function deleturno($idturno){
   $sentencia = $this->db->prepare("DELETE FROM turnos WHERE id_turno=?");
   $sentencia->execute(array($idturno));
 }
 function editturnodb($turno){
   $id = $turno['id_turno'];
   $fecha = $turno['fecha'];
   $hora = $turno['hora'];
   $nombre = $turno['nombre'];
   $email = $turno['email'];
   $id_serv = $this->getnombreservicio($turno['servicio']);
   $sentencia = $this->db->prepare("UPDATE turnos SET fecha=?, hora=?, nombre=?, email=?, fk_id_servicio=? WHERE id_turno=?");
   $sentencia->execute(array($fecha,$hora,$nombre,$email,$id_serv['id_servicio'],$id));
 }
 function meterturno($turno){

    $fecha = $turno['fecha'];
    $hora = $turno['hora'];
    $nombre = $turno['nombre'];
    $email =$turno['email'];
    $id_serv = $this->getnombreservicio($turno['servicio']);
    $sentencia = $this->db->prepare("INSERT INTO turnos(fecha,hora,nombre,email,fk_id_servicio) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($fecha,$hora,$nombre,$email,$id_serv['id_servicio']));
 }

 ///////////////////////////////////////////////////////////////////////////////
 ////////////////*ACTUALIZA, AGREGA, ELIMINA Y CONSULTA TABLA SERVICIO*////////////////////////////////////
 ///////////////////////////////////////////////////////////////////////////////

function getservicio(){
   $posible = $this->db->prepare( "select * from servicios order by id_servicio ASC");
   $posible->execute();
   return $posible->fetchAll(PDO::FETCH_ASSOC);
 }
function deleservicio($idservicio){
   $sentencia = $this->db->prepare("DELETE FROMservicios WHERE id_servicio=?");
   $sentencia->execute(array($idservicio));
 }
function getnombreservicio($servicio){
   $sentencia = $this->db->prepare( "SELECT * FROM servicios WHERE servicio=?");
   $sentencia->execute(array($servicio));
   return $sentencia->fetch(PDO::FETCH_ASSOC);}
function getturnosconservicio($id){
  $sentencia = $this->db->prepare( "SELECT * FROM servicios WHERE servicio=?");
  $sentencia->execute(array($id));
  return $sentencia->fetch(PDO::FETCH_ASSOC);

}
function editserviciodb($serv){
    $servicio = $serv['servicio'];
    $id = $serv['id_servicio'];
    $sentencia = $this->db->prepare("UPDATE servicios SET servicio=? WHERE id_servicio=?");
    $sentencia->execute(array($servicio,$id));
}
function meterservicio($serv){
    $servicio = $serv['servicio'];
    $sentencia = $this->db->prepare("INSERT INTO servicios(servicio) VALUES(?)");
    $sentencia->execute(array($servicio));
}

///////////////////////////////////////////////////////////////////////////////
////////////////*ACTUALIZA, AGREGA, ELIMINA Y CONSULTA TABLA RECOMENDADOS*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

 function getrecomendado(){
   $posible = $this->db->prepare( "select * from recomendados order by id_recomendado ASC");
   $posible->execute();
   return $posible->fetchAll(PDO::FETCH_ASSOC);
 }
 function delerecomendado($idrecomendado){
   $sentencia = $this->db->prepare("DELETE FROM recomendados WHERE id_recomendado=?");
   $sentencia->execute(array($idrecomendado));
 }
 function eliminar_imagen_recomendado($id_recomendado){
   $imagenes = $this->getimagenes();
   foreach ($imagenes as $imag) {
     if ($imag['fk_id_recomendado' == $id_recomendado]) {
       $this->deleimagen($imag['id_imagen']);
     }
   }
 }
 function editrecomendadodb($recomendado){
   $id = $recomendado['id_recomendado'];
   $servicio = $recomendado['servicio'];
   $empresa = $recomendado['empresa'];
   $ciudad = $recomendado['ciudad'];
   $direccion = $recomendado['direccion'];
   $sentencia = $this->db->prepare("UPDATE recomendados SET servicio=?, empresa=?, ciudad=?, direccion=? WHERE id_recomendado=?");
   $sentencia->execute(array($servicio,$empresa,$ciudad,$direccion,$id));
 }
 function meterrecomendado($recomendado,$imagenes){
     $servicio = $recomendado['servicio'];
     $empresa = $recomendado['empresa'];
     $ciudad = $recomendado['ciudad'];
     $direccion = $recomendado['direccion'];
     $sentencia = $this->db->prepare("INSERT INTO recomendados(servicio,empresa,ciudad,direccion) VALUES(?,?,?,?)");
     $sentencia->execute(array($servicio,$empresa,$ciudad,$direccion));
     $id = $this->db->lastInsertId();
     $this->insertarimagen($imagenes,$id);
  }

///////////////////////////////////////////////////////////////////////////////
////////////////*ACTUALIZA, AGREGA, ELIMINA Y CONSULTA TABLA IMAGENES*////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

function getimagenes(){
  $posible = $this->db->prepare( "SELECT * FROM imagenes_recomendadas");
  $posible->execute();
  return $posible->fetchAll(PDO::FETCH_ASSOC);
}
function deleimagen($idimagen){
   $sentencia = $this->db->prepare("DELETE FROM imagenes_recomendadas WHERE id_imagen=?");
   $sentencia->execute(array($idimagen));
 }
function insertarimagen($imagenes,$id){
   foreach ($imagenes as $imagen) {
     $path="images/".uniqid()."_".$imagen['name'];
     move_uploaded_file($imagen['tmp_name'], $path);
     $imgs = $this->db->prepare("INSERT INTO imagenes_recomendadas(fk_id_recomendado,imagen) VALUES(?,?)");
     $imgs->execute(array($id,$path));
   }
 }
}
///////////////////////////////////////////////////////////////////////////////
?>
