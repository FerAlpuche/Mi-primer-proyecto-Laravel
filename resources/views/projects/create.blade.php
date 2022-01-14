@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

@include('partials.validation-errors')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form 
            method="POST" 
            action=" {{ route('projects.store') }}" 
            class="bg-white shadow rounded py-3 px-4"
            enctype="multipart/form-data">
                <h1 class="display-4">Nuevo proyecto</h1>
                <hr>
                @include('projects._form')
    
                <button class="btn btn-outline-success">Guardar</button>
                <a class="btn btn-outline-danger" href=" {{ route('projects.index')}}">
                    Cancelar
                </a>
            </form>
        </div>
    </div>
</div>


@endsection
