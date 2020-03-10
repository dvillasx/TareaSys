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
                                <th scope="col">Usuario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($equipos as $equipo)
                            <tr>
                                <th scope="row">{{$equipo->id}}</th>
                                <td>
                                    <a href="{{route('equipo.edit',$equipo->id)}}">
                                    {{$equipo->nombre_equipo}}
                                    </a>
                                </td>
                                <td>
                                    @foreach($equipo->users as $user)
                                        {{$user->name}} <br>
                                    @endforeach
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