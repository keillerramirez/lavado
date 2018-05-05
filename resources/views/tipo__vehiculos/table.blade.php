<table class="table table-responsive" id="tipoVehiculos-table">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoVehiculos as $tipoVehiculos)
        <tr>
            <td>{!! $tipoVehiculos->Descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoVehiculos.destroy', $tipoVehiculos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoVehiculos.show', [$tipoVehiculos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoVehiculos.edit', [$tipoVehiculos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>