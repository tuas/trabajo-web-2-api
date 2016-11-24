<?php
/* Smarty version 3.1.30, created on 2016-11-23 15:42:13
  from "C:\xampp\htdocs\web2\templates\logueado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835aac568a614_13465619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8944e174a83fa665dfac80e41bad70a143276674' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\logueado.tpl',
      1 => 1479908762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835aac568a614_13465619 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['permiso']->value) {?>
<li><a href="#" id="config"><span class="glyphicon glyphicon-user" aria-hidden="true"> configuracion</span> </a></li>
<?php }?>
<li><a href="#" id="logout"><span class="glyphicon glyphicon-user" aria-hidden="true"> cerrar sesion</span> </a></li>
<?php }
}
