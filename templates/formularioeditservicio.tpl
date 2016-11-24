<form id="editservicio" action="" method="post">
  <div class="form-group">
    <input type="hidden" name="id_servicio" value="{$serv['id_servicio']}">
  </div>

  <div class="form-group">
        <label class="control-label col-xs-3">nombre del servicio:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="servicio"></input>
        </div>
    </div>
  <div class="form-group">
      <div class="col-xs-offset-3 col-xs-9">
          <input type="submit" id='btn_editarserviciotabla' class="btn btn-primary" value="Enviar"></input>
      </div>
  </div>
</form>
