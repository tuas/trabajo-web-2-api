<ul>
  {foreach from=$servicios key=index item=servicio}
    <li><span>{$servicio['servicio']}</span></li>
  {/foreach}
</ul>
<div id="paracomentarios"> </div>
{if !empty($permiso)}
<div class="">
  <form id="form-comentario">
    <select class="form-group" name="servicio">
      {foreach from=$servicios key=index item=servicio}
        <option value="{$servicio['id_servicio']}">{$servicio['servicio']}</option>
      {/foreach}
    </select>
  <div class="form-group">
    <label for="">Valoración</label>
    <select type="text" class="form-control" name="valoracion" required>
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
     </select>
   </div>
    <div class="form-group">
      <label for="NombrePosicion">Comentario</label>
      <textarea type="text" class="form-control" name="comentario" required></textarea>
    </div>
      <input type="submit" id="btn-comentarios" name="comentar" value="comentar">
  </form>
</div>
{/if}
