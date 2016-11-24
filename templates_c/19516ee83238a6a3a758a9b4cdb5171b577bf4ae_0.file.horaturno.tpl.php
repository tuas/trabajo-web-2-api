<?php
/* Smarty version 3.1.30, created on 2016-11-23 17:54:23
  from "C:\xampp\htdocs\web2\templates\horaturno.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835c9bf2007b4_92553049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19516ee83238a6a3a758a9b4cdb5171b577bf4ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\horaturno.tpl',
      1 => 1479675368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835c9bf2007b4_92553049 (Smarty_Internal_Template $_smarty_tpl) {
?>



<form class="form-horizontal">
  <?php if ($_smarty_tpl->tpl_vars['usuario']->value != '') {?>
  <input type="hidden" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
" checked="checked">
  <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
" checked="checked">
  <?php } else { ?>
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
    <?php }?>
    <div class="form-group">
      <label class="control-label col-xs-3">Elija horario y tipo de trabaja a realizar para el dia <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
:</label>
    <div class='col-xs-9'>
       <table class="selecturno">
         <thead>
           <th>Horarios</th>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicio']->value, 'serv', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['serv']->value) {
?>
              <th><?php echo $_smarty_tpl->tpl_vars['serv']->value['servicio'];?>
</th>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

         </thead>
         <tbody>
           <tr>
             <td>Sin turno</td>
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicio']->value, 'serv', false, 'vaicio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vaicio']->value => $_smarty_tpl->tpl_vars['serv']->value) {
?>
                <td><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['serv']->value['servicio'];?>
" value="0" checked="checked"></td>
             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

           </tr>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['turno']->value, 'horario', false, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value => $_smarty_tpl->tpl_vars['horario']->value) {
?>
              <tr>
                <td><span><?php echo $_smarty_tpl->tpl_vars['horario']->value[0];?>
</span></td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicio']->value, 'serv', false, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value => $_smarty_tpl->tpl_vars['serv']->value) {
?>
                  <td>
                    <?php $_smarty_tpl->_assignInScope('pertenece', FALSE);
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horario']->value, 'instancia', false, 'h');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h']->value => $_smarty_tpl->tpl_vars['instancia']->value) {
?>
                      <?php if ($_smarty_tpl->tpl_vars['h']->value != 0 && $_smarty_tpl->tpl_vars['pertenece']->value == FALSE) {?>
                        <?php if ($_smarty_tpl->tpl_vars['serv']->value['id_servicio'] == $_smarty_tpl->tpl_vars['instancia']->value) {?>
                          <?php $_smarty_tpl->_assignInScope('pertenece', TRUE);
?>
                          <span>Ocupado</span>
                        <?php }?>
                      <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php if ($_smarty_tpl->tpl_vars['pertenece']->value == FALSE) {?>
                      <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['serv']->value['servicio'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['horario']->value[0];?>
">
                    <?php }?>
                  </td>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

         </tbody>
       </table>
      </div>
  </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" id='btn_agregarturno' class="btn btn-primary" value="Enviar"></input>
        </div>
    </div>
</form>
<div class="turnosadmin">

</div>
<?php }
}
