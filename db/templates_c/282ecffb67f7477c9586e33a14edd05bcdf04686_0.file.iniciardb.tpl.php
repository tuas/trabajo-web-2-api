<?php
/* Smarty version 3.1.30, created on 2016-11-23 22:16:08
  from "C:\xampp\htdocs\web2\db\templates\iniciardb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58360718540370_32170107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '282ecffb67f7477c9586e33a14edd05bcdf04686' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\db\\templates\\iniciardb.tpl',
      1 => 1479861134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58360718540370_32170107 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalación de la base de datos</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body >
<div >
    <section>
        <div class="container-center lg animated slideInDown">
            <div class="view-header">
                <div class="header-title">
                    <h3>Instalación de la base de datos</h3>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                <div class="panel-body ">
                    <form class="database" method="post">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Host</label>
                                <input type="name" value="" class="form-control" name="host" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Usuario</label>
                                <input type="name" value="" class="form-control" name="user" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contraseña</label>
                                <input type="password" value=""class="form-control" name="db-pw">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nombre base de datos</label>
                                <input type="name" value="" class="form-control" name="dbname" required>
                            </div>
                            <div class="form-group col-lg-12">
                              <div class="checkbox"><label> <input type="checkbox" name="vaciar" value=""> Vaciar base de datos</label></div>
                              <div class="checkbox"><label> <input type="checkbox" name="add" value=""> Agregar datos a la base de datos</label></div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default">Confirmar</button>
                        </div>
                    </form>
                    <div class="errors"> </div>
                </div>
            </div>

        </div>
    </section>

</div>

<?php echo '<script'; ?>
 src="../js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/ajax.js"><?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
