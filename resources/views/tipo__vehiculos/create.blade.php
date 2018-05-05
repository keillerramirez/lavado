@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo  Vehiculos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tipoVehiculos.store']) !!}

                        @include('tipo__vehiculos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
