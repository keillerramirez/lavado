<table class="table table-responsive" id="tipoLavados-table">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoLavados as $tipoLavados)
        <tr>
            <td>{!! $tipoLavados->Descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoLavados.destroy', $tipoLavados->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoLavados.show', [$tipoLavados->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoLavados.edit', [$tipoLavados->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>