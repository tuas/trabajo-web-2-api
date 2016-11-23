
 <h1>FUNCIONES DE ADMINISTRADOR</h1>


<div>
    <h2>Tabla de turnos</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Id servicio</th>
        <th>Edit</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        {foreach from=$turno key=i item=horarios}
          <tr>
            {foreach from=$horarios key=h item=cliente}
              <td>
                <span>{$cliente}</span>
              </td>
            {/foreach}

            <td><a href="#" class="formularioeturnotabla" data-idturno="{$horarios['id_turno']}"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" class="eliminarturnotabla" data-idturno="{$horarios['id_turno']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        {/foreach}
        <tr>
          <td><a href="#" id="formularioturnotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionturno"></div>
</div>

<div>
    <h2>Tabla de servicios</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Servicio</th>
        <th>Edit</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        {foreach from=$serv key=i item=servicios}
          <tr>
            {foreach from=$servicios key=h item=servicio}
              <td>
                <span>{$servicio}</span>
              </td>
            {/foreach}
            <td><a href="#" class="formularioeditarserviciotabla" data-idservicios="{$servicios['id_servicio']}"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" class="eliminarserviciotabla" data-idservicios="{$servicios['id_servicio']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        {/foreach}
        <tr>
          <td><a href="#" id="formularioserviciotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionservicio"></div>
</div>

<div>
    <h2>Tabla de recomendados</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Servicio</th>
        <th>Empresa</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>imagenes</th>
        <th>Edit</th>
        <th>Eliminar</th>
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
            </td>
            <td><a href="#" class="formularioeditarrecomendadotabla" data-idrecomendados="{$recomedados['id_recomendado']}"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" class="eliminarrecomendadotabla" data-idrecomendados="{$recomedados['id_recomendado']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        {/foreach}
        <tr>
          <td><a href="#" id="formulariorecomendadotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionrecomendados"></div>
</div>
<div>
  <h2>Lista de usuarios</h2>
  <table class="selecturno">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Password</th>
      <th>Tipo de usuario</th>
      <th>Edit</th>
      <th>Eliminar</th>
    </thead>
    <tbody>
      {foreach from=$usuarios key=i item=usuario}
        <tr>
            <td>
              <span>{$usuario['id_login']}</span>
            </td>
            <td>
              <span>{$usuario['nombre']}</span>
            </td>
            <td>
              <span>{$usuario['user']}</span>
            </td>
            <td>
              <span>{$usuario['pass']}</span>
            </td>
            <td>
              <span>{$usuario['t_user']}</span>
            </td>
          <td><a href="#" class="formularioeditarusuariotabla" data-idlogin="{$usuario['id_login']}"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
          <td><a href="#" class="eliminarusuariotabla" data-idlogin="{$usuario['id_login']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
        </tr>
      {/foreach}
      <tr>
        <td><a href="#" id="formulariousuariotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
      </tr>
    </tbody>
  </table>
  <div id="modificacionusuario"></div>
</div>
