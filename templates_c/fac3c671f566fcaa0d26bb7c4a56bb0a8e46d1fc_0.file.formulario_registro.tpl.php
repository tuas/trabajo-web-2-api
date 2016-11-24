<?php
/* Smarty version 3.1.30, created on 2016-11-23 15:39:27
  from "C:\xampp\htdocs\web2\templates\formulario_registro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835aa1f144b76_59663338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fac3c671f566fcaa0d26bb7c4a56bb0a8e46d1fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\formulario_registro.tpl',
      1 => 1479505937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835aa1f144b76_59663338 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="registro" action="" method="post">
  <div class="form-group">
    <label class="control-label col-xs-3">Nombre:</label>
      <div class="col-xs-9">
        <input type="text" class="form-control" name="nombre"></input>
      </div>
  </div>
  <div class="form-group">
        <label class="control-label col-xs-3">email:</label>
        <div class="col-xs-9">
            <input type="email" class="form-control" name="email"></input>
        </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-3">contraseña:</label>
      <div class="col-xs-9">
        <input type="password" class="form-control" name="password"></input>
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-offset-3 col-xs-9">
          <input type="submit" id='btn_registrar' class="btn btn-primary" value="Enviar"></input>
      </div>
  </div>
</form>
<?php }
}
