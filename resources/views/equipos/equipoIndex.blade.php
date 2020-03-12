@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Equipos</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Nombre Equipo</th>
                                <th scope="col">Usuarios</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($equipos as $equipo)
                            <tr>
                                <th scope="row">{{$equipo->id}}</th>
                              
                                    <th scope="row"> {{$equipo->nombre_equipo}}</th>
                                
                               
                                <td>
                                    @foreach($equipo->users as $user)
                                        {{$user->name}} <br>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('equipo.edit',$equipo->id)}}">
                                        <button class="btn btn-warning" href="{{route('equipo.edit',$equipo->id)}}">
                                            Editar
                                        </button>
                                        </a>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection