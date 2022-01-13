@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
<h1>Editar el proyecto</h1>

@include('partials.validation-errors')

<form method="POST" action="{{ route('projects.update', $project) }}">

    @method('PATCH')
    @include('partials._form')
    
    <button>Actualizar</button>
</form>

@endsection
