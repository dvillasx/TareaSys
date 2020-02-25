@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Tarea</div>
                <div class="card-body">
                    <!-- <form action="{{action('TareaController@store')}}" method="POST"> -->
                    <form action="{{route('tarea.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Nombre Tarea') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre_tarea" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Fecha Inicio') }}</label>

                            <div class="col-md-6">
                                <input  name="fecha_inicio" type="date" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Fecha Termino') }}</label>
                            <div class="col-md-6">
                                <input  name="fecha_termino" type="date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <textarea type="text" class="form-control" name="descripcion" require></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prioridad" class="col-md-4 col-form-label text-md-right">{{ __('Prioridad') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="prioridad">Opciones</label>
                                    </div>
                                    <select class="custom-select" name="prioridad" require>
                                        <option selected>Selecciona...</option>
                                        <option value="1">Baja</option>
                                        <option value="2">Media</option>
                                        <option value="3">Alta</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear Tarea') }}
                                </button>

                                <a href="{{action('TareaController@index')}}" class="btn btn-link">
                                    Listado
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection