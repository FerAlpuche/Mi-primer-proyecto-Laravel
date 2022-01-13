@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
<h1>Registrar un nuevo proyecto</h1>

@include('partials.validation-errors')

<form method="POST" action=" {{ route('projects.store') }}">

    @include('partials._form')

    <button>Guardar</button>
</form>

@endsection
