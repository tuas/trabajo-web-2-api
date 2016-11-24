<?php
/* Smarty version 3.1.30, created on 2016-11-23 22:40:41
  from "C:\xampp\htdocs\web2\templates\formulariousuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58360cd9a98764_74138289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f062b9729381aca931a63b6dd7ccee92060cce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\formulariousuario.tpl',
      1 => 1479747526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58360cd9a98764_74138289 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="agregausuario" action="" method="post">
  <div class="form-group">
    <label class="control-label col-xs-3">Nombre:</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" name="nombre" placeholder="Nombre"></input>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-3">Email:</label>
    <div class="col-xs-9">
      <input type="email" class="form-control" name="email" placeholder="ejemplo@web.com"></input>
    </div>
  </div>
  <div class="form-group">
        <label class="control-label col-xs-3">Contraseña:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" name="password"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Tipo de usuaro:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="t_user" placeholder="cliente"></input>
        </div>
    </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id='btn_agregarusuariotabla' class="btn btn-primary" value="Enviar"></input>
            </div>
        </div>

</form>
<?php }
}
