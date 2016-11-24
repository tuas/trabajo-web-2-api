<form id="editrecomendado" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" name="id_recomendado" value="{$recomendado['id_recomendado']}">
  </div>

  <div class="form-group">
      <label class="control-label col-xs-3">Servicio:</label>
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
        <label class="control-label col-xs-3">Ciudad:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="ciudad" placeholder="Ciudad"></input>
        </div>
    </div>
    <div class="form-group">
          <label class="control-label col-xs-3">Direccion:</label>
          <div class="col-xs-9">
              <input type="text" class="form-control" name="direccion" placeholder="direccion"></input>
          </div>
      </div>
      <div class="form-group">
            <label class="control-label col-xs-3">que desea hacer con las imagenes:</label>
            <div class="col-xs-9">
              <select name="accion">
                <option value="nada">dejar igual</option>
                <option value="eliminar">eliminar imagenes</option>
                <option value="agregar">agregar imagenes</option>
                <option value="reempazar">remplazar imagenes</option>
              </select>
            </div>
        </div>
      <div class="form-group">
            <label class="control-label col-xs-3">imagenes:</label>
            <div class="col-xs-9">
              <input type="file" name="imagenes[]" required value="" id="imagenesedit" multiple>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id='btn_editarrecomendadotabla' class="btn btn-primary" value="Enviar"></input>
            </div>
        </div>

</form>
