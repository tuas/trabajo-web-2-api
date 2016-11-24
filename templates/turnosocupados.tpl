<h2>Elija el servicio por el cual se quiere ordenar</h2>
<form id="elegirorden" method="post">
  <select name="id_servicio">
    {foreach from=$servicios key=index item=servicio}
    <option value="{$servicio['id_servicio']}">{$servicio['servicio']}</option>
    {/foreach}
  </select>
  <input type="submit" id="btn-orden" name="ordenar" value="ordenar">
</form>
<h2>Tabla de turnos ya solicitados</h2>
<table class="selecturno">
  <thead>
    <th>fecha</th>
    <th>hora</th>
    <th>cliente</th>
    <th>email</th>
    <th>servicio requerido</th>
  </thead>
  <tbody>
    {foreach from=$turno_ocupado key=index item=turno}
      <tr>
        <td><span>{$turno['fecha']}</span></td>
        <td><span>{$turno['hora']}</span></td>
        <td><span>{$turno['nombre']}</span></td>
        <td><span>{$turno['email']}</span></td>
        <td>
          {foreach from=$servicios key=index item=servicio}
            {if ($servicio['id_servicio']==$turno['fk_id_servicio'])}
              <span>{$servicio['servicio']}</span>
            {/if}
          {/foreach}
        </td>
      </tr>
    {/foreach}
  </tbody>
</table>
