<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $vehiculos->id !!}</p>
</div>

<!-- Clientes Id Field -->
<div class="form-group">
    {!! Form::label('Clientes_id', 'Clientes Id:') !!}
    <p>{!! $vehiculos->Clientes_id !!}</p>
</div>

<!-- Placa Field -->
<div class="form-group">
    {!! Form::label('Placa', 'Placa:') !!}
    <p>{!! $vehiculos->Placa !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $vehiculos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $vehiculos->updated_at !!}</p>
</div>

