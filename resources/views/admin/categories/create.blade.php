@extends('adminlte::page')

@section('title', 'Pixel Cursos')

@section('content_header')
    <h1>Crear nueva categoría</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre:', ['class' => 'font-bold']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de la categoría']) !!}

                    @error('name')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror

                </div>
                {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop