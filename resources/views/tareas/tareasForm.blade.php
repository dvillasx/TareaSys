@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="card-header">Nueva Tarea</div>
                <div class="card-body">
                    @isset($tarea)
                    {!! Form::model($tarea, ['route' => ['tarea.update', $tarea->id], 'method' => 'PATCH']) !!}
                        {{-- <form action="{{route('tarea.update',$tarea)}}" method="POST">
                            @method('PATCH') --}}
                    @else
                        {!! Form::open(['route' => 'tarea.store']) !!}
                        {{-- <form action="{{route('tarea.store')}}" method="POST"> --}}
                    @endisset
                        {{-- @csrf --}}
                        <div class="form-group row">
                            {{-- <label  class="col-md-4 col-form-label text-md-right">{{ __('Nombre Tarea') }}</label> --}}
                            {!! Form::label('nombre_tarea', 'Nombre Tarea', ['class' => 'col-md-4 col-form-label text-md-right']); !!}
                            <div class="col-md-6">
                                {{-- <input type="text" class="form-control" name="nombre_tarea" value="{{$tarea->nombre_tarea ?? null}}"> --}}
                                {!! Form::text('nombre_tarea', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Fecha Inicio') }}</label>

                            <div class="col-md-6">
                                {{-- <input type="date" class="form-control" name="fecha_inicio" value="{{$tarea->fecha_inicio ?? null}}"> --}}
                                {!! Form::date('fecha_inicio', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Fecha Termino') }}</label>
                            <div class="col-md-6">
                                {{-- <input type="date" class="form-control" name="fecha_termino" value="{{$tarea->fecha_termino ?? null}}"> --}}
                                {!! Form::date('fecha_termino', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                {{-- <textarea type="text" class="form-control" name="descripcion" require></textarea> --}}
                                {{-- <textarea type="text" class="form-control" name="descripcion" required> {{$tarea->descripcion ?? null}}  </textarea> --}}
                                {!! Form::textarea('descripcion', null, ['class' => 'form-control','rows' => '2']); !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prioridad" class="col-md-4 col-form-label text-md-right">{{ __('Prioridad') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="prioridad">Opciones</label>
                                    </div>
                                    {!! Form::select('prioridad', ['1' => 'Baja','2' => 'Media','3' => 'Alta'], null, ['class' => 'custom-select']); !!}
                                    {{-- <select class="custom-select" name="prioridad" required>
                                        <option selected>Selecciona...</option>
                                        <option value="1" {{ isset($tarea) && $tarea->prioridad == 1 ? 'selected' : ''}}>Baja</option>
                                        <option value="2" {{ isset($tarea) && $tarea->prioridad == 2 ? 'selected' : ''}}>Media</option>
                                        <option value="3" {{ isset($tarea) && $tarea->prioridad == 3 ? 'selected' : ''}}>Alta</option>
                                    </select> --}}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            
                                <button type="submit" class="btn {{isset($tarea) && $tarea != null ? 'btn-primary' : 'btn-success'}}" >
                                    {{ __('Guardar Tarea') }}
                                    {{-- {{isset($tarea) && $tarea != null ? 'Actualizar Tarea' : ''Crear Tarea''}} --}}
                                </button>

                                
                                <a href="{{action('TareaController@index')}}" class="btn btn-link">
                                    Listado
                                </a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    {{-- </form> --}}
                </div>
            </div>
        </div>
        @endsection