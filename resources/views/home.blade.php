@extends('layout')

@section('title', 'home')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mb-4">
            <h1 class="display-4 mb-4">Desarrollo web</h1>
            <p class="lead text-secondary">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Sit et voluptatibus dolorum dolor totam, fuga quos. Facere,
                itaque. Alias quae deserunt ea officiis tempore
                cumque iure libero assumenda? Magni, aliquid.
            </p>
            <a class="btn btn-lg btn-block btn-info" href="{{ route('contact') }}">
                Contáctame
            </a>
            <a class="btn btn-lg btn-block btn-outline-info" href="{{ route('projects.index') }}">
                Portafolio
            </a>
        </div>
        <div class="col-12" >
            <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo web">
        </div>
    </div>
</div>

@endsection
