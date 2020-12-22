

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

    <form action="/departamentos" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!--<input type="hidden" name="user_id" value="//\Illuminate\Support\Facades\Auth::id()"> -->

        <div class="mb-3">
            <label for="" class="form-label">NOMBRE</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
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