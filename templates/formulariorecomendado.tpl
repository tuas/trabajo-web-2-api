<form id="agregarecomendado" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-xs-3">servicio:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="servicio" placeholder="Servicio"></input>
        </div>
    </div>
    <div class="form-group">
          <label class="control-label col-xs-3">Empresa:</label>
          <div class="col-xs-9">
              <input type="text" class="form-control" name="empresa" placeholder="Empresa"></input>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-xs-3">ciudad:</label>
          <div class="col-xs-9">
              <input type="text" class="form-control" name="ciudad" placeholder="Ciudad"></input>
          </div>
      </div>
      <div class="form-group">
            <label class="control-label col-xs-3">direccion:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="direccion" placeholder="direccion"></input>
            </div>
        </div>
        <div class="form-group">
              <label class="control-label col-xs-3">logo:</label>
              <div class="col-xs-9">
                <input type="file" name="imagenes[]" value="" id="imagenesagregar" multiple>
              </div>
          </div>
          <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id="btn_agregarrecomendadotabla" class="btn btn-primary" value="Agregar"></input>
            </div>
        </div>

</form>
