

@extends('layout.main')

@section('contenido_principal')

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/empleados/{{ $datos->id  }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ method_field('PUT') }}

        <div class="mb-3">
            <label for="" class="form-label">NOMBRES</label>
            <input type="text" name="nombres" value="{{$datos->nombres }}" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">APELLIDOS</label>
            <input type="text" name="apellidos" value="{{ $datos->apellidos }}" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CEDULA</label>
            <input type="text" name="cedula" value="{{ $datos->cedula }}" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CELULAR</label>
            <input type="text" name="celular" value="{{ $datos->celular }}" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CORREO</label>
            <input type="text" name="correo" value="{{ $datos->correo }}" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CARGO</label>
            <input type="text" name="cargo" value="{{ $datos->cargo }}" class="form-control" >
        </div>

        <button type="submit" class="btn btn-primary">GRABAR CAMBIOS REALIZADOS</button>
        <button type="reset" class="btn btn-warning">LIMPIAR FORMULARIO</button>
        <a href="/home" class="btn btn-success">INICIO</a>
    </form>

@endsection