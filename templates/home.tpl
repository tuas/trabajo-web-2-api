<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>taller chapista</title>
    <link rel="stylesheet" href="varios/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="varios/css/disenio.css" media="screen" title="no title" charset="utf-8">
    <script src="varios/js/jquery.js"></script>
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
        <li><a id="serv" href="#" ><span class="glyphicon glyphicon-list" aria-hidden="true"> Servicios recomendados</span></a></li>
        <li><a id="turn" href="#" ><span class="glyphicon glyphicon-calendar" aria-hidden="true"> Turnos</span></a></li>
        <li id='adm'>{include file='login.tpl'}</li>
      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->

</nav>
<div class="cuerpo">
<div class="row">
  <div class="col-sm-9">

    <article id="contenido">{include file='inicio.tpl'}</article>
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
  <script src="varios/js/comportamiento.js" charset="utf-8"></script>
  <script src="varios/js/bootstrap.min.js" charset="utf-8"></script>

</body>
</html>
