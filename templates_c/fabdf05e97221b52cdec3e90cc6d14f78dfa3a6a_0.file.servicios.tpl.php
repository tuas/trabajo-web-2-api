<?php
/* Smarty version 3.1.30, created on 2016-11-23 15:51:21
  from "C:\xampp\htdocs\web2\templates\servicios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835ace9d5deb5_83273583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fabdf05e97221b52cdec3e90cc6d14f78dfa3a6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\servicios.tpl',
      1 => 1479760372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835ace9d5deb5_83273583 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <h2>Servicios recomendados</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Servicio</th>
        <th>Empresa</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>imagenes</th>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recomendado']->value, 'recomedados', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['recomedados']->value) {
?>
          <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recomedados']->value, 'elemento', false, 'h');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h']->value => $_smarty_tpl->tpl_vars['elemento']->value) {
?>
              <td>
                <span><?php echo $_smarty_tpl->tpl_vars['elemento']->value;?>
</span>
              </td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <td>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagen']->value, 'imagenes', false, 'j');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['j']->value => $_smarty_tpl->tpl_vars['imagenes']->value) {
?>
                <?php if (($_smarty_tpl->tpl_vars['imagenes']->value['fk_id_recomendado'] == $_smarty_tpl->tpl_vars['recomedados']->value['id_recomendado'])) {?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['imagenes']->value['imagen'];?>
" alt="imagenes del servicio" />
                <?php }?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </tbody>
    </table>
</div>
<?php }
}
