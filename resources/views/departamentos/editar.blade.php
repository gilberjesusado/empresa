

@extends('layout.main')

@section('contenido_principal')

    <form action="/departamentos/{{ $datos->id  }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ method_field('PUT') }}

        <div class="mb-3">
            <label for="" class="form-label">NOMBRE</label>
            <input type="text" name="nombre" value="{{ $datos->nombre }}" class="form-control" >
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">GRABAR DEPARTAMENTO</button>
        <button type="reset" class="btn btn-warning">LIMPIAR FORMULARIO</button>
        </form>

@endsection