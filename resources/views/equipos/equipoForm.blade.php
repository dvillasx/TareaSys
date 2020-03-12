@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Equipo</div>
                <div class="card-body">
                    @isset($equipo)
                    {!! Form::model($equipo, ['route' => ['equipo.update', $equipo->id], 'method' => 'PATCH']) !!}
                    @else
                        {!! Form::open(['route' => 'equipo.store']) !!}
                    @endisset
                        <div class="form-group row">
                            {!! Form::label('nombre_equipo', 'Nombre Equipo', ['class' => 'col-md-4 col-form-label text-md-right']); !!}
                            <div class="col-md-6">
                                {!! Form::text('nombre_equipo', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="user_id">Usuarios</label>
                                    </div>
                                    {!! Form::select('user_id[]', $users, isset($equipo) ? $equipo->users()->pluck('id'): null, ['class' => 'custom-select', 'multiple']); !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            
                                <button type="submit" class="btn {{isset($equipos) && $equipos != null ? 'btn-primary' : 'btn-success'}}" >
                                    {{ __('Guardar') }}
                                </button>

                                <a href="{{action('EquipoController@index')}}" class="btn btn-link">
                                    Listado
                                </a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @endsection