<form id="editusuario" action="" method="post">
  <div class="form-group">
    <input type="hidden" name="id_usuario" value="{$usuario['id_login']}">
  </div>
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
  <div class="form-group">
        <label class="control-label col-xs-3">Contraseña:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" name="password"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Tipo de usuaro:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="t_user" placeholder="cliente"></input>
        </div>
    </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id='btn_editarusuariotabla' class="btn btn-primary" value="Enviar"></input>
            </div>
        </div>

</form>
