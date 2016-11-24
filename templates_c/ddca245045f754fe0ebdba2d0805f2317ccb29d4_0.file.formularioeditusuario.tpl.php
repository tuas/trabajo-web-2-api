<?php
/* Smarty version 3.1.30, created on 2016-11-23 22:47:03
  from "C:\xampp\htdocs\web2\templates\formularioeditusuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58360e57c12cd3_37009031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddca245045f754fe0ebdba2d0805f2317ccb29d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\formularioeditusuario.tpl',
      1 => 1479937610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58360e57c12cd3_37009031 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="editusuario" action="" method="post">
  <div class="form-group">
    <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_login'];?>
">
  </div>
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
          <select class="form-control" name="t_user">
            <option value="cliente">cliente</option>
            <option value="administrador">administrador</option>
          </select>
        </div>
    </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id='btn_editarusuariotabla' class="btn btn-primary" value="Enviar"></input>
            </div>
        </div>

</form>
<?php }
}
