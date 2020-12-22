

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

    <form action="/empleados" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!--<input type="hidden" name="user_id" value="//\Illuminate\Support\Facades\Auth::id()"> -->

        <div class="mb-3">
            <label for="" class="form-label">NOMBRES</label>
            <input type="text" name="nombres" class="form-control" placeholder="Digita tus nombres" value="{{ old('nombres') }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">APELLIDOS</label>
            <input type="text" name="apellidos" class="form-control" placeholder="Digita tus apellidos" value="{{ old('apellidos') }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CEDULA</label>
            <input type="number" name="cedula" class="form-control" placeholder="Digita tu cédula" value="{{ old('cedula') }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CELULAR</label>
            <input type="number" name="celular" class="form-control" placeholder="Digita tu celular" value="{{ old('celular') }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CORREO</label>
            <input type="email" name="correo" class="form-control" placeholder="Digita tu correo" value="{{ old('correo') }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CARGO</label>
            <input type="text" name="cargo" class="form-control" placeholder="Digita tu cargo" value="{{ old('cargo') }}">
        </div>

        <button type="submit" class="btn btn-primary">GRABAR EMPLEADO</button>
        <button type="reset" class="btn btn-warning">LIMPIAR FORMULARIO</button>
    </form>

@endsection