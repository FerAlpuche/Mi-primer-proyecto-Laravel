@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

@include('partials.validation-errors')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form 
            method="POST" action="{{ route('projects.update', $project) }}" 
            class="bg-white shadow rounded py-3 px-4"
            enctype="multipart/form-data">
                <h1 class="display-4">Editar proyecto</h1>
                <hr>
                @method('PATCH')
                @include('projects._form')

                <button class="btn btn-outline-success btn-lg">Actualizar</button>

                <a class="btn btn-outline-danger btn-lg" href=" {{ route('projects.index')}}">
                    Cancelar
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
