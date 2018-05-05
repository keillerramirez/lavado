<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('vehiculos*') ? 'active' : '' }}">
    <a href="{!! route('vehiculos.index') !!}"><i class="fa fa-edit"></i><span>Vehiculos</span></a>
</li>

<li class="{{ Request::is('tipoLavados*') ? 'active' : '' }}">
    <a href="{!! route('tipoLavados.index') !!}"><i class="fa fa-edit"></i><span>Tipo Lavados</span></a>
</li>

<li class="{{ Request::is('tipoLavados*') ? 'active' : '' }}">
    <a href="{!! route('tipoLavados.index') !!}"><i class="fa fa-edit"></i><span>Tipo Lavados</span></a>
</li>

<li class="{{ Request::is('tipoVehiculos*') ? 'active' : '' }}">
    <a href="{!! route('tipoVehiculos.index') !!}"><i class="fa fa-edit"></i><span>Tipo  Vehiculos</span></a>
</li>

