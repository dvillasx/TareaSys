@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$tarea->user->name}}: Descripción Tarea {{$tarea->id}} {{$tarea->estatus}}</div>
                <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre_tarea" value="{{$tarea->id}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Nombre Tarea') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre_tarea" value="{{$tarea->nombre_tarea}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Fecha Inicio') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fecha_inicio" value="{{$tarea->fecha_inicio->format('d/m/y')}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Fecha Termino') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fecha_termino" value="{{$tarea->fecha_termino->format('d/m/y')}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <textarea type="text" class="form-control" name="descripcion" disabled> {{$tarea->descripcion}}  </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prioridad" class="col-md-4 col-form-label text-md-right">{{ __('Prioridad') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="prioridad" value="{{$tarea->prioridad}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="categoria" value="{{$tarea->categoria->nombre_categoria}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estatus" class="col-md-4 col-form-label text-md-right">{{ __('Estatus') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="estatus" value="{{$tarea->estatus}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{route('tarea.edit',$tarea->id)}}" class="btn btn-primary btn">Editar</a>
                                {{-- @if (\Gate::allows('administrador')) --}}
                                @can('propietario', $tarea)
                                <form action="{{route('tarea.destroy',$tarea->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn">Eliminar</button>
                                </form>
                                {{-- @endif --}}
                                @endcan
                                <a href="{{action('TareaController@index')}}" class="btn btn-link">
                                    Listado
                                </a>
                            </div>
                        </div>
         
                </div>
            </div>
        </div>
        @endsection