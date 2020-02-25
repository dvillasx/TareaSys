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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tareas as $tarea)
                            <tr>
                                <th scope="row">{{$tarea->id}}</th>
                                <td>{{$tarea->nombre_tarea}}</td>
                                <td>{{$tarea->descripcion}}</td>
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