<!-- Clientes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Clientes_id', 'Clientes Id:') !!}
    {!! Form::select('Clientes_id', $datos['clientes'], null, ['class' => 'form-control']) !!}
</div>

<!-- Placa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Placa', 'Placa:') !!}
    {!! Form::text('Placa', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vehiculos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
