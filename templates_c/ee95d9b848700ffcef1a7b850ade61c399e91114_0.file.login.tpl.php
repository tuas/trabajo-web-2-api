<?php
/* Smarty version 3.1.30, created on 2016-11-23 19:55:17
  from "C:\xampp\htdocs\web2\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835e6151b0908_07805850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee95d9b848700ffcef1a7b850ade61c399e91114' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\login.tpl',
      1 => 1479927314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835e6151b0908_07805850 (Smarty_Internal_Template $_smarty_tpl) {
?>

          <li><a href="#" id="administrador"><span class="glyphicon glyphicon-user" aria-hidden="true"> Administrador </span> </a></li>
          <div id='oculto'>
          				<div class="col-xs-11">
          				   <form id="login-form"class="col-xs-9">
          					     <input id="username" type="text" name="username" placeholder="Username" required>
          					     <input id="password" type="password" name="password" placeholder="Password" required>
          					     <input id="enviarlogin" type="submit" name="login" class="login loginmodal-submit" value="Login">
          				   </form>
          				<a href="#" id="registrar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"class="col-xs-2"> Registrate</span></a>
          					</div>
          </div>
<?php }
}
