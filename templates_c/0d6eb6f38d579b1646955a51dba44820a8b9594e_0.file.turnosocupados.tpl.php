<?php
/* Smarty version 3.1.30, created on 2016-11-23 20:48:13
  from "C:\xampp\htdocs\web2\templates\turnosocupados.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835f27ddffbf9_16133027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d6eb6f38d579b1646955a51dba44820a8b9594e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\turnosocupados.tpl',
      1 => 1479930280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835f27ddffbf9_16133027 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Elija el servicio por el cual se quiere ordenar</h2>
<form id="elegirorden" method="post">
  <select name="id_servicio">
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
  <input type="submit" id="btn-orden" name="ordenar" value="ordenar">
</form>
<h2>Tabla de turnos ya solicitados</h2>
<table class="selecturno">
  <thead>
    <th>fecha</th>
    <th>hora</th>
    <th>cliente</th>
    <th>email</th>
    <th>servicio requerido</th>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['turno_ocupado']->value, 'turno', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['turno']->value) {
?>
      <tr>
        <td><span><?php echo $_smarty_tpl->tpl_vars['turno']->value['fecha'];?>
</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['turno']->value['hora'];?>
</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['turno']->value['nombre'];?>
</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['turno']->value['email'];?>
</span></td>
        <td>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicios']->value, 'servicio', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['servicio']->value) {
?>
            <?php if (($_smarty_tpl->tpl_vars['servicio']->value['id_servicio'] == $_smarty_tpl->tpl_vars['turno']->value['fk_id_servicio'])) {?>
              <span><?php echo $_smarty_tpl->tpl_vars['servicio']->value['servicio'];?>
</span>
            <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}
