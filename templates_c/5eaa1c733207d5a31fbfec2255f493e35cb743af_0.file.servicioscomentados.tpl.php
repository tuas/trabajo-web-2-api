<?php
/* Smarty version 3.1.30, created on 2016-11-24 03:13:25
  from "C:\xampp\htdocs\web2\templates\servicioscomentados.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58364cc5dd1712_38313273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eaa1c733207d5a31fbfec2255f493e35cb743af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\servicioscomentados.tpl',
      1 => 1479953594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58364cc5dd1712_38313273 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicios']->value, 'servicio', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['servicio']->value) {
?>
    <li><span><?php echo $_smarty_tpl->tpl_vars['servicio']->value['servicio'];?>
</span></li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<div id="paracomentarios"> </div>
<?php if (!empty($_smarty_tpl->tpl_vars['permiso']->value)) {?>
<div class="">
  <form id="form-comentario">
    <select class="form-group" name="servicio">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicios']->value, 'servicio', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['servicio']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['servicio']->value['id_servicio'];?>
"><?php echo $_smarty_tpl->tpl_vars['servicio']->value['servicio'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
  <div class="form-group">
    <label for="">Valoración</label>
    <select type="text" class="form-control" name="valoracion" required>
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
     </select>
   </div>
    <div class="form-group">
      <label for="NombrePosicion">Comentario</label>
      <textarea type="text" class="form-control" name="comentario" required></textarea>
    </div>
      <input type="submit" id="btn-comentarios" name="vercomentarios" value="ver comentarios">
  </form>
</div>
<?php }
}
}
