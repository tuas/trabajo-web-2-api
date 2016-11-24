


<form class="form-horizontal">
  {if $usuario != ''}
  <input type="hidden" name="nombre" value="{$usuario['nombre']}" checked="checked">
  <input type="hidden" name="email" value="{$usuario['email']}" checked="checked">
  {else}
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
    {/if}
    <div class="form-group">
      <label class="control-label col-xs-3">Elija horario y tipo de trabaja a realizar para el dia {$fecha}:</label>
    <div class='col-xs-9'>
       <table class="selecturno">
         <thead>
           <th>Horarios</th>
           {foreach from=$servicio key=index item=serv}
              <th>{$serv['servicio']}</th>
           {/foreach}
         </thead>
         <tbody>
           <tr>
             <td>Sin turno</td>
             {foreach from=$servicio key=vaicio item=serv}
                <td><input type="radio" name="{$serv['servicio']}" value="0" checked="checked"></td>
             {/foreach}
           </tr>
           {foreach from=$turno key=t item=horario}
              <tr>
                <td><span>{$horario[0]}</span></td>
                {foreach from=$servicio key=s item=serv}
                  <td>
                    {$pertenece = FALSE}
                    {foreach from=$horario key=h item=instancia}
                      {if $h != 0 and $pertenece == FALSE}
                        {if $serv['id_servicio'] == $instancia}
                          {$pertenece = TRUE}
                          <span>Ocupado</span>
                        {/if}
                      {/if}
                    {/foreach}
                    {if $pertenece == FALSE}
                      <input type="radio" name="{$serv['servicio']}" value="{$horario[0]}">
                    {/if}
                  </td>

          {/foreach}
        </tr>
          {/foreach}
         </tbody>
       </table>
      </div>
  </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" id='btn_agregarturno' class="btn btn-primary" value="Enviar"></input>
        </div>
    </div>
</form>
<div class="turnosadmin">

</div>
