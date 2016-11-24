<?php
/* Smarty version 3.1.30, created on 2016-11-23 22:10:42
  from "C:\xampp\htdocs\web2\templates\formularioeditrecomendado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583605d2a71cc9_20925731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa14a03cd0cbfc9f32a80cdb96064e6330813473' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\formularioeditrecomendado.tpl',
      1 => 1479758818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583605d2a71cc9_20925731 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="editrecomendado" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" name="id_recomendado" value="<?php echo $_smarty_tpl->tpl_vars['recomendado']->value['id_recomendado'];?>
">
  </div>

  <div class="form-group">
      <label class="control-label col-xs-3">Servicio:</label>
      <div class="col-xs-9">
          <input type="text" class="form-control" name="servicio" placeholder="Servicio"></input>
      </div>
  </div>
  <div class="form-group">
        <label class="control-label col-xs-3">Empresa:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="empresa" placeholder="Empresa"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Ciudad:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="ciudad" placeholder="Ciudad"></input>
        </div>
    </div>
    <div class="form-group">
          <label class="control-label col-xs-3">Direccion:</label>
          <div class="col-xs-9">
              <input type="text" class="form-control" name="direccion" placeholder="direccion"></input>
          </div>
      </div>
      <div class="form-group">
            <label class="control-label col-xs-3">que desea hacer con las imagenes:</label>
            <div class="col-xs-9">
              <select name="accion">
                <option value="nada">dejar igual</option>
                <option value="eliminar">eliminar imagenes</option>
                <option value="agregar">agregar imagenes</option>
                <option value="reempazar">remplazar imagenes</option>
              </select>
            </div>
        </div>
      <div class="form-group">
            <label class="control-label col-xs-3">imagenes:</label>
            <div class="col-xs-9">
              <input type="file" name="imagenes[]" required value="" id="imagenesedit" multiple>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id='btn_editarrecomendadotabla' class="btn btn-primary" value="Enviar"></input>
            </div>
        </div>

</form>
<?php }
}
