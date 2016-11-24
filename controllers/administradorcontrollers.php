<?php
////////////////*CONTROLADOR DE FUNCIONES  ADMINISTRADOR*/////////////////////

include_once('models/administradorModel.php');
include_once('views/vistaadministrador.php');
include_once('controllers/error_controllers.php');

class administradorController {
  private $admini;
  private $turno;
  private $serv;
  private $recomendado;
  private $vista;
  private $error;
  private $usuario;
  private $imagen;

function __construct()
{
  $this->admini = new administradormodelo();
  $this->vista = new administradorView();
  $this->error = new errorController();
  $this->turno = new administradormodelo();
  $this->serv = new administradormodelo();
  $this->recomendado = new administradormodelo();
  $this->usuario = new administradormodelo();
  $this->imagen = new administradormodelo();
}

///////////////////////////////////////////////////////////////////////////////
///////////////// CARGA DE FUNCIONES DE ADMINISTRADOR

function loading(){
  $turno = $this->turno->getturnos();
  $serv = $this->serv->getservicio();
  $recomendado = $this->recomendado->getrecomendado();
  $usuarios = $this->usuario->getusuarios();
  $imagen = $this->imagen->getimagenes();
  $this->vista->mostraradministrador($turno,$serv,$recomendado,$usuarios,$imagen);
}
///////////////////////////////////////////////////////////////////////////////
/////////////////////////// CARGA FORMULARIOS

function cargar_formulario($action){
    $this->vista->mostrar_agregar($action);
}


///////////////////////////////////////////////////////////////////////////////
/////////////////////TURNOS

function mostrar_form_edit_t($action){
  if ($_POST) {
    $turno = $_POST;
    $this->vista->mostrar_for($action,$turno);
  }
}

function edicion_tabla_turno(){
  $turno = $this->verificarturno($_POST);
  if ($turno!=0) {
    $this->admini->editturnodb($turno);
  }
  $this->loading();
}



function agregaenturno(){
  $turno = $this->verificarturno($_POST);
  if ($turno!=0) {
    $this->admini->meterturno($turno);
  }
  $this->loading();
}

function eliminar_t(){
  if ($_POST['id_turno']) {
    $idturno = $_POST['id_turno'];
    $turnos = $this->admini->deleturno($idturno);
  }
  else {
  $this->error->falta('el elemento a eliminar');
  }
  $this->loading();
}

function verificarturno($dato){
 if ($dato['fecha']){
    if ($dato['hora']){
       if ($dato['nombre']){
          if ($dato['email']){
            if ($dato['servicio']) {
              return $dato;
              }
              else {
                $this->error->mostrar_error('no ingreso una servicio valida');
              }
          }

          else{
              $this->error->mostrar_error('no ingreso una email valida');
          }
       }
       else{
           $this->error->mostrar_error('no ingreso una nombre valida');
       }
    }
    else{
        $this->error->mostrar_error('no ingreso una hora valida');
    }
  }
  else{
     $this->error->mostrar_error('no ingreso una fecha valido');
  }
}

////////////////////////////////////////////////////////////////////////////
////////////////// SERVICIOS

function mostrar_form_edit_s($action){
  if ($_POST) {
  $serv = $_POST;
  $this->vista->mostrar_for_s($action,$serv);
  }
}

function edicion_tabla_servicio(){
  $serv = $this->verificarservicio($_POST);
  if ($serv!=0) {
  $this->admini->editserviciodb($serv);
  }
  $this->loading();
}

function agregaenservicio(){
  $serv = $this->verificarservicio($_POST);
  if ($serv!=0) {
    $this->admini->meterservicio($serv);
  }
  $this->loading();
}

function eliminar_s(){
  if ($_POST['id_servicio']) {
    $idservicio = $_POST['id_servicio'];
    $servicios = $this->admini->deleservicio($idservicio);
  }
  $this->loading();
}

function verificarservicio($dato){
 if ($dato['servicio']){
    return $dato;
  }
  else{
     $this->error->mostrar_error('no ingreso una servicio valido');
  }
}

/////////////////////////////////////////////////////////////////////////////
////////////////RECOMENDADOS

function mostrar_form_edit_r($action){
  if ($_POST) {
  $recomendado = $_POST;
  $this->vista->mostrar_for_r($action,$recomendado);
  }
}

function edicion_tabla_recomendado(){
  $recomendado = $this->verificarrecomendado($_POST);
  if ($recomendado!=0) {
    $this->admini->editrecomendadodb($recomendado);
    if ($recomendado['accion']='eliminar') {
      $this->admini->eliminar_imagen_recomendado($recomendado['id_recomendado']);
    }
    else {
      if ($recomendado['accion']='nada') {
        echo "no se realizaron cambios a las imagenes";
      }
      else {
        if(isset($_FILES['imagenes'])){
          $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
          if(count($imagenesVerificadas)>0){
            if ($recomendado['accion']='agregar') {
              $this->admini->insertarimagen($imagenesVerificadas,$recomendado['id_recomendado']);
            }
            else {
              $this->admini->eliminar_imagen_recomendado($recomendado['id_recomendado']);
              $this->admini->insertarimagen($imagenesVerificadas,$recomendado['id_recomendado']);
            }
          }
          else{
            $this->error->mostrar_error('ingrese un logo');
          }
        }
        else {
          $this->error->mostrar_error('este formulario no incluye imagenes');
        }
      }
    }
  }
  $this->loading();
}


function agregaenrecomendado(){
    $recomendado = $this->verificarrecomendado($_POST);
      if ($recomendado!=0){
        if(isset($_FILES['imagenes'])){
              $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
              if(count($imagenesVerificadas)>0){
                     $this->admini->meterrecomendado($recomendado,$imagenesVerificadas);
                     }
              else{
                    $this->error->mostrar_error('ingrese un logo');
                  }
                }
        else {
              $this->error->mostrar_error('este formulario no incluye imagenes');
              }
      }
    $this->loading();
  }


function eliminar_r(){
    if ($_POST['id_recomendado']) {
      $idrecomendado = $_POST['id_recomendado'];
      $recomendados = $this->admini->delerecomendado($idrecomendado);
    }
    $this->loading();
  }

function getImagenesVerificadas($imagenes){
    $imagenesVerificadas = [];
    for ($i=0; $i < count($imagenes['size']); $i++) {
      if($imagenes['size'][$i]>0 && $imagenes['type'][$i]=="image/jpeg"){
          $imagen_aux = [];
          $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
          $imagen_aux['name']=$imagenes['name'][$i];
          $imagenesVerificadas[]=$imagen_aux;
      }
    }
  return $imagenesVerificadas;
  }

function verificarrecomendado($dato){
   if ($dato['servicio']){
      if ($dato['empresa']){
         if ($dato['ciudad']){
            if ($dato['direccion']){
                    return $dato;
                  }
            else{
                $this->error->mostrar_error('no ingreso una direccion valida');
            }
         }
         else{
             $this->error->mostrar_error('no ingreso una ciudad valida');
         }
      }
      else{
          $this->error->mostrar_error('no ingreso una empresa valida');
      }
    }
    else{
       $this->error->mostrar_error('no ingreso un servicio valido');
    }
  }



///////////////////////////////////////////////////////////////////////////////
///////////////////  USUARIOS

function mostrar_form_edit_u($action){
  if ($_POST) {
  $usuarios = $_POST;
  $this->vista->mostrar_for_u($action,$usuarios);
  }
}
function edicion_tabla_usuario(){
  $usuarios = $this->verificarusuario($_POST);
  if (($usuarios!=0)&&($usuarios['t_user']!='dueño')) {
        $this->admini->editusuariodb($usuarios);
                   }
  else{
      $this->error->mostrar_error('ingrese un usuario valido');
        }
  $this->loading();
}

function agregaenusuario(){
    $usuarios = $this->verificarusuario($_POST);
      if (($usuarios!=0)&&($usuarios['t_user']!='dueño')){
            $this->admini->meterusuario($usuarios);

      }
    $this->loading();
  }


  function eliminar_u(){
    if ($_POST['id_login']) {
      $idusuario = $_POST['id_login'];
      $usuarios = $this->admini->deleusuario($idusuario);
    }
    $this->loading();
  }

  function verificarusuario($dato){
    if ($dato['nombre']){
       if ($dato['email']){
          if ($dato['password']){
             if ($dato['t_user']){
                     return $dato;
                   }
             else{
                 $this->error->mostrar_error('no ingreso un tipo valido');
             }
          }
          else{
              $this->error->mostrar_error('no ingreso una password valida');
          }
       }
       else{
           $this->error->mostrar_error('no ingreso un email valido');
       }
     }
     else{
        $this->error->mostrar_error('no ingreso un nombre valido');
     }
   }


///////////////////////////////////////////////////////////////////


}


 ?>
