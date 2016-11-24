<?php
/* Smarty version 3.1.30, created on 2016-11-23 19:48:28
  from "C:\xampp\htdocs\web2\templates\funcionadministrador.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835e47c2fefc8_10088210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7588d4757bacad0412134935da14daf14dbbcc10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\funcionadministrador.tpl',
      1 => 1479760058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835e47c2fefc8_10088210 (Smarty_Internal_Template $_smarty_tpl) {
?>

 <h1>FUNCIONES DE ADMINISTRADOR</h1>


<div>
    <h2>Tabla de turnos</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Id servicio</th>
        <th>Edit</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['turno']->value, 'horarios', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['horarios']->value) {
?>
          <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horarios']->value, 'cliente', false, 'h');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h']->value => $_smarty_tpl->tpl_vars['cliente']->value) {
?>
              <td>
                <span><?php echo $_smarty_tpl->tpl_vars['cliente']->value;?>
</span>
              </td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            <td><a href="#" class="formularioeturnotabla" data-idturno="<?php echo $_smarty_tpl->tpl_vars['horarios']->value['id_turno'];?>
"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" class="eliminarturnotabla" data-idturno="<?php echo $_smarty_tpl->tpl_vars['horarios']->value['id_turno'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
          <td><a href="#" id="formularioturnotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionturno"></div>
</div>

<div>
    <h2>Tabla de servicios</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Servicio</th>
        <th>Edit</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['serv']->value, 'servicios', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['servicios']->value) {
?>
          <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicios']->value, 'servicio', false, 'h');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h']->value => $_smarty_tpl->tpl_vars['servicio']->value) {
?>
              <td>
                <span><?php echo $_smarty_tpl->tpl_vars['servicio']->value;?>
</span>
              </td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <td><a href="#" class="formularioeditarserviciotabla" data-idservicios="<?php echo $_smarty_tpl->tpl_vars['servicios']->value['id_servicio'];?>
"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" class="eliminarserviciotabla" data-idservicios="<?php echo $_smarty_tpl->tpl_vars['servicios']->value['id_servicio'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
          <td><a href="#" id="formularioserviciotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionservicio"></div>
</div>

<div>
    <h2>Tabla de recomendados</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Servicio</th>
        <th>Empresa</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>imagenes</th>
        <th>Edit</th>
        <th>Eliminar</th>
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

            </td>
            <td><a href="#" class="formularioeditarrecomendadotabla" data-idrecomendados="<?php echo $_smarty_tpl->tpl_vars['recomedados']->value['id_recomendado'];?>
"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" class="eliminarrecomendadotabla" data-idrecomendados="<?php echo $_smarty_tpl->tpl_vars['recomedados']->value['id_recomendado'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
          <td><a href="#" id="formulariorecomendadotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionrecomendados"></div>
</div>
<div>
  <h2>Lista de usuarios</h2>
  <table class="selecturno">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Password</th>
      <th>Tipo de usuario</th>
      <th>Edit</th>
      <th>Eliminar</th>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['usuario']->value) {
?>
        <tr>
            <td>
              <span><?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_login'];?>
</span>
            </td>
            <td>
              <span><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</span>
            </td>
            <td>
              <span><?php echo $_smarty_tpl->tpl_vars['usuario']->value['user'];?>
</span>
            </td>
            <td>
              <span><?php echo $_smarty_tpl->tpl_vars['usuario']->value['pass'];?>
</span>
            </td>
            <td>
              <span><?php echo $_smarty_tpl->tpl_vars['usuario']->value['t_user'];?>
</span>
            </td>
          <td><a href="#" class="formularioeditarusuariotabla" data-idlogin="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_login'];?>
"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
          <td><a href="#" class="eliminarusuariotabla" data-idlogin="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_login'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
        </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <tr>
        <td><a href="#" id="formulariousuariotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
      </tr>
    </tbody>
  </table>
  <div id="modificacionusuario"></div>
</div>
<?php }
}
