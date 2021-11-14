@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>ADMINISTRADORES</h1>
        <button type="button" class="btn btn-info">
            <a href="{{url('/createAdmin')}}" class="text-white">
                Crear Nuevo
            </a>    
        </button>
    </div>

    <div class="table-responsive">
        <table class="table user-table no-wrap">
            <thead>
                <tr>
                    <th class="border-top-0">#</th>
                    <th class="border-top-0">Nombre</th>
                    <th class="border-top-0">Correo</th>
                    <th class="border-top-0">Puesto</th>
                    <th class="border-top-0">Celular</th>
                    <th class="border-top-0">Editar</th>
                    <th class="border-top-0">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arrayAdmin as $i => $a )
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->nombre }} {{ $a->fullname }}</td>
                        <td>{{ $a->email }}</td>
                        <td>{{ $a->puesto }}</td>
                        <td>{{ $a->celular }}</td>
                        <td>
                            <button type="button" class="btn btn-warning">
                                <a href="{{ url('/modifyAdmin/'.$a->id) }}" class="text-white" >
                                    Modificar
                                </a>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">
                                <a href="" class="text-white" >
                                    Activo
                                </a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop