@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Tareas</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Nombre Tarea</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Fecha Inicio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tareas as $tarea)
                            <tr>
                                <th scope="row">{{$tarea->id}}</th>
                                <td>
                                    <a href="{{route('tarea.show',$tarea->id)}}">
                                    {{$tarea->nombre_tarea}}
                                    </a>
                                </td>
                                <td>{{$tarea->descripcion}}</td>
                                <td>{{$tarea->fecha_inicio->format('d/m/y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    <a href="{{action('TareaController@create')}}" class="btn btn-success btn">Crear</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection