<div>
    <h2>Servicios recomendados</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Servicio</th>
        <th>Empresa</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>imagenes</th>
      </thead>
      <tbody>
        {foreach from=$recomendado key=i item=recomedados}
          <tr>
            {foreach from=$recomedados key=h item=elemento}
              <td>
                <span>{$elemento}</span>
              </td>
            {/foreach}
            <td>
              {foreach from=$imagen key=j item=imagenes}
                {if ($imagenes['fk_id_recomendado']==$recomedados['id_recomendado'])}
                  <img src="{$imagenes['imagen']}" alt="imagenes del servicio" />
                {/if}
              {/foreach}
        {/foreach}
      </tbody>
    </table>
</div>
