<?php
/* Smarty version 3.1.30, created on 2016-11-23 21:19:57
  from "C:\xampp\htdocs\web2\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835f9ed823488_84955733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f12d7d2a567b4fd2964de921cadd24331b8d49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\home.tpl',
      1 => 1479932394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
    'file:inicio.tpl' => 1,
  ),
),false)) {
function content_5835f9ed823488_84955733 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>taller chapista</title>
    <link rel="stylesheet" href="varios/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="varios/css/disenio.css" media="screen" title="no title" charset="utf-8">
    <?php echo '<script'; ?>
 src="varios/js/jquery.js"><?php echo '</script'; ?>
>
  </head>
  <body>
 <nav class="navbar navbar-inverse" role="navigation">
   <!-- Banner -->
 <img id="banner" src="images/img/taller1.jpg" alt="Banner del taller" />
  <div class="container-fluid">

    <!-- navbar -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a id="ini" class="navbar-brand" href="#" > <span class="glyphicon glyphicon-home" aria-hidden="true"> Inicio</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li><a id="gal" href="#" ><span class="glyphicon glyphicon-picture" aria-hidden="true"> Galeria</span> </a></li>
        <li><a id="comentarios" href="#" ><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"> Nuestro servicios</span></a></li>
        <li><a id="serv" href="#" ><span class="glyphicon glyphicon-list" aria-hidden="true"> Servicios recomendados</span></a></li>
        <li><a id="turn" href="#" ><span class="glyphicon glyphicon-calendar" aria-hidden="true"> Solicitar turnos</span></a></li>
        <li><a id="ocupado" href="#" ><span class="glyphicon glyphicon-book" aria-hidden="true"> Turnos ocupados</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="adm"><?php $_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->

</nav>
<div class="cuerpo">
<div class="row">
  <div class="col-sm-9">

    <article id="contenido"><?php $_smarty_tpl->_subTemplateRender("file:inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</article>
  </div>
  <div class="col-sm-3 hidden-xs">
    <aside class="propagandas">
      <a href="#"><img src="images/img/propaganda/agos_018.jpg" alt="publicidad" /></a>
      <a href="#"><img src="images/img/propaganda/homer.gif" alt="publicidad" /></a>
    </aside>
  </div>
</div>
</div>
<footer>
  <div class="row">
  <div class="col-sm-3">
      <img id="logo" src="images/img/logo.jpg" alt="logo" />
  </div>
    <div class="col-sm-5">
      <label>Domicilio: Calle 22 Nº520</label>
      <label>Balcarce, Provincia de Buenos Aires, Argentina</label>
      <label>Telefono: (02266)42-2862</label>
      <label>Email: bolloloco@gmail.com</label>
    </div>
    <div class="col-sm-3">
      <ul class="sociales">
      <li><a href="https://www.facebook.com" target="_blank"><img src="images/img/redessociales/facebook.png" alt="facebook"></a><span></span></li>
      <li><a href="http://www.twitter.com" target="_blank"><img src="images/img/redessociales/twitter.png" alt="twitter"></a><span></span></li>
      <li><a href="https://plus.google.com" target="_blank"><img src="images/img/redessociales/google.png" alt="google+"></a><span></span></li>
      </ul>
    </div>
  </div>
</footer>
  <?php echo '<script'; ?>
 src="varios/js/comportamiento.js" charset="utf-8"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="varios/js/bootstrap.min.js" charset="utf-8"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
