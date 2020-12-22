@extends('layout.main')

@section('contenido_principal')

    <h1>LISTADO DE DEPARTAMENTOS</h1>

    <a href="home" class="btn btn-success">INICIO</a>
    <a href="departamentos/create" class="btn btn-success">CREAR</a>

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
            <th scope="col">NOMBRE</th>
            <th scope="col">ESTADO</th>
            <th scope="col">EDITAR</th>
            <th scope="col">ELIMINAR</th>

        </tr>
        </thead>
        <tbody>
        @foreach($datos as $dato)
            <tr>
                <td scope="row">{{ $dato->id}}</td>
                <td scope="row">{{ $dato->nombre  }}</td>
                <td>{{ $dato->estado}}</td>
                <td> <a href="/departamentos/{{$dato->id}}/edit" class="btn btn-success">EDITAR</a></td>
                <td>
                    <form action="/departamentos/{{$dato->id}}" method="POST">
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