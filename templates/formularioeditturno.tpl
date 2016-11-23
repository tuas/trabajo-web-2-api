<form id="editturno" action="" method="post">
  <div class="form-group">
    <input type="hidden" name="id_turno" value="{$turno['id_turno']}">
  </div>

  <div class="form-group">
        <label class="control-label col-xs-3">fecha:</label>
        <div class="col-xs-9">
            <input type="date" class="form-control" name="fecha"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">hora:</label>
        <div class="col-xs-9">
            <input type="int" class="form-control" name="hora" placeholder="13"></input>
        </div>
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
            <label class="control-label col-xs-3">servicio:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="servicio" placeholder="servicio"></input>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id='btn_editarturnotabla' class="btn btn-primary" value="Enviar"></input>
            </div>
        </div>

</form>
