@extends('layout.main')

@section('contenido_principal')

    <h1>LISTADO DE EMPLEADOS</h1>

    <a href="home" class="btn btn-success">INICIO</a>
    <a href="empleados/create" class="btn btn-success">CREAR</a>

    @if(session('estado'))
        <div class="alert alert-success mt-2 alert-dismissible fade show" role="alert">
            {{ session('estado') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRES</th>
            <th scope="col">APELLIDOS</th>
            <th scope="col">CEDULA</th>
            <th scope="col">CELULAR</th>
            <th scope="col">CORREO</th>
            <th scope="col">CARGO</th>
            <th scope="col">EDITAR</th>
            <th scope="col">ELIMINAR</th>

        </tr>
        </thead>
        <tbody>
        @foreach($datos as $dato)
            <tr>
                <th scope="row">{{ $dato->id}}</th>
                <td scope="row">{{ $dato->nombres  }}</td>
                <td>{{ $dato->apellidos}}</td>
                <td>{{ $dato->cedula  }}</td>
                <td>{{ $dato->celular  }}</td>
                <td>{{ $dato->correo  }}</td>
                <td>{{ $dato->cargo  }}</td>
                <td> <a href="/empleados/{{$dato->id}}/edit" class="btn btn-success">EDITAR</a></td>
                <td>
                    <form action="/empleados/{{$dato->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">ELIMINAR</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection