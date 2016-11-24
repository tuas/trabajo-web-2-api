<?php
/* Smarty version 3.1.30, created on 2016-11-23 20:26:42
  from "C:\xampp\htdocs\web2\templates\formularioagregar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835ed72e46af0_40069168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be243fe2f19ed4bb1125a20115fa79f5679510a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\formularioagregar.tpl',
      1 => 1479929171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835ed72e46af0_40069168 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="agregaturno" action="" method="post">
  <div class="form-group">
        <label class="control-label col-xs-3">fecha:</label>
        <div class="col-xs-9">
            <input type="date" class="form-control" name="fecha"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">hora:</label>
        <div class="col-xs-9">
            <input type="int" class="form-control" name="hora" placeholder="13" min="8" max="21"></input>
        </div>
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
            <label class="control-label col-xs-3">servicio:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="servicio" placeholder="servicio"></input>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id='btn_agregarturnotabla' class="btn btn-primary" value="Enviar"></input>
            </div>
        </div>

</form>
<?php }
}
