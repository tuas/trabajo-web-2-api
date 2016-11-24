<?php
include_once('controllers/error_controllers.php');
include_once('controllers/home_controllers.php');
include_once('controllers/turno_controllers.php');
include_once('controllers/login_controllers.php');
include_once('controllers/ocupado_controllers.php');
include_once('controllers/administradorcontrollers.php');
include_once('libs/Smarty.class.php');
include_once('config/ConfigApp.php');

$logincontroller = new loginController();
$turnocontroller = new turnoController();
$controller = new TallerController();
$errorcontroller = new errorController();
$admincontroller = new administradorController();
$ocupadocontroller = new ocupadoController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->home('home');
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$LOGIN:
      $logincontroller->checklogin();
    break;
    case ConfigApp::$CONTROLPAGINA:
      $admincontroller->loading();
    break;
    case ConfigApp::$CERRARSESION:
      $logincontroller->logout();
    break;
    case ConfigApp::$FORM_REGISTRAR:
      $logincontroller->form_registrar();
    break;
    case ConfigApp::$REGISTRAR:
      $logincontroller->registrar();
    break;
    case ConfigApp::$GALERIA:
      $controller->galeria('galeria');
      break;
    case ConfigApp::$SERVICIOS:
      $controller->servicio('servicios');
      break;
    case ConfigApp::$OCUPADO:
      $ocupadocontroller->nuestroservicio();
      break;
    case ConfigApp::$CAMBIAR_ORDEN:
      $ocupadocontroller->nuevoorden();
      break;
    case ConfigApp::$COMENTARIOS:
      $controller->cargarservicioscomentados();
      break;
    case ConfigApp::$TURNO:
      $controller->turno('turno');
      break;
    case ConfigApp::$INICIO:
      $controller->iniciar('inicio');
      break;
    case ConfigApp::$ACTION_MOSTRAR_TURNOS:
      $turnocontroller->mostrar_turnos();
      break;
    case ConfigApp::$ACTION_GUARDAR_TURNO:
      $turnocontroller->guardarturno();
      break;
    case ConfigApp::$ACTION_FORMEDIT_TABLA_TURNO:
      $admincontroller->mostrar_form_edit_t('formularioeditturno');
      break;
    case ConfigApp::$ACTION_EDIT_TABLA_TURNO:
      $admincontroller->edicion_tabla_turno();
      break;
    case ConfigApp::$ACTION_FORMADD_TABLA_TURNO:
      $admincontroller->cargar_formulario('formularioagregar');
      break;
    case ConfigApp::$ACTION_ADD_TABLA_TURNO:
      $admincontroller->agregaenturno();
      break;
    case ConfigApp::$ACTION_ELIMINAR_TABLA_TURNO:
      $admincontroller->eliminar_t();
      break;
    case ConfigApp::$ACTION_FORMEDIT_TABLA_SERVICIO:
      $admincontroller->mostrar_form_edit_s('formularioeditservicio');
      break;
    case ConfigApp::$ACTION_EDIT_TABLA_SERVICIO:
      $admincontroller->edicion_tabla_servicio();
      break;
    case ConfigApp::$ACTION_FORMADD_TABLA_SERVICIO:
      $admincontroller->cargar_formulario('formularioservicio');
      break;
    case ConfigApp::$ACTION_ADD_TABLA_SERVICIO:
      $admincontroller->agregaenservicio();
      break;
    case ConfigApp::$ACTION_ELIMINAR_TABLA_SERVICIO:
      $admincontroller->eliminar_s();
      break;
    case ConfigApp::$ACTION_FORMEDIT_TABLA_RECOMENDADO:
      $admincontroller->mostrar_form_edit_r('formularioeditrecomendado');
      break;
    case ConfigApp::$ACTION_EDIT_TABLA_RECOMENDADO:
      $admincontroller->edicion_tabla_recomendado();
      break;
    case ConfigApp::$ACTION_FORMADD_TABLA_RECOMENDADO:
      $admincontroller->cargar_formulario('formulariorecomendado');
      break;
    case ConfigApp::$ACTION_ADD_TABLA_RECOMENDADO:
      $admincontroller->agregaenrecomendado();
      break;
    case ConfigApp::$ACTION_ELIMINAR_TABLA_RECOMENDADO:
      $admincontroller->eliminar_r();
      break;
    //////////////////////////////////////////////////////////////////
    case ConfigApp::$ACTION_FORMEDIT_TABLA_USUARIO:
      $admincontroller->mostrar_form_edit_U('formularioeditusuario');
      break;
    case ConfigApp::$ACTION_EDIT_TABLA_USUARIO:
      $admincontroller->edicion_tabla_usuario();
      break;
    case ConfigApp::$ACTION_FORMADD_TABLA_USUARIO:
      $admincontroller->cargar_formulario('formulariousuario');
      break;
    case ConfigApp::$ACTION_ADD_TABLA_USUARIO:
      $admincontroller->agregaenusuario();
      break;
    case ConfigApp::$ACTION_ELIMINAR_TABLA_USUARIO:
      $admincontroller->eliminar_u();
      break;
    default:
      $controller->home('home');
      break;
}

?>
