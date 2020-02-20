@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario</div>
                <div class="card-body">
                <a href="{{action('TareaController@index')}}" class="btn btn-danger btn">
                        Listado
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection