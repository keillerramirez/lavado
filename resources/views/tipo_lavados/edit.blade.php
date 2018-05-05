@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Lavados
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoLavados, ['route' => ['tipoLavados.update', $tipoLavados->id], 'method' => 'patch']) !!}

                        @include('tipo_lavados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection