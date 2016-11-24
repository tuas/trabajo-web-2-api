<?php
/* Smarty version 3.1.30, created on 2016-11-23 16:18:18
  from "C:\xampp\htdocs\web2\templates\turno.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835b33adaa0b9_01884370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3646e053a9e3faffaf04131f09ad7dbbff38350f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\turno.tpl',
      1 => 1479505938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835b33adaa0b9_01884370 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="horaturno">
<h2>Pedidos de turnos</h2>
<form id='forulario' action="" method="post">
  <div class="form-group">
      <label class="control-label col-xs-3">Ingrese el dia para el turno:</label>
      <div class="col-xs-9">
          <input type="date" class="form-control" name="dia" ></input>
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-offset-3 col-xs-9">
          <input type="submit" id='btn_enviardia' class="btn btn-primary" value="enviar"></input>
      </div>
  </div>
<div id="horarios"></div>
</form>
</div>
<?php }
}
