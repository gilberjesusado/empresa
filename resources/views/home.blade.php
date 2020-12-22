@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="empleados/create" class="btn btn-primary">Crear Empleado</a>
                        <a href="empleados" class="btn btn-danger">Listar Empleados</a>

                        <br>
                        <br>

                        <a href="departamentos/create" class="btn btn-primary">Crear Departamento</a>
                        <a href="departamentos" class="btn btn-danger">Listar Departamentos</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
