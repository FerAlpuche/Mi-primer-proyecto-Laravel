@extends('layout')

@section('title', 'Portafolio')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-12 col-xl-10 col-lg-6 mx-auto">
            <br>
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="display-4">Proyectos</h1>
                @auth
                <a href="{{ route('projects.create') }}" class="btn btn-outline-primary">
                    Crear proyecto
                </a>
                @endauth
            </div>
            <hr>
            <p class="lead text-secondary">
                Proyectos realizados por los estudiantes de la UTEZ, nivel ING.
            </p>
            <br>
            <div class="d-flex flex-wrap justify-content-between align-items-start">
                @forelse ($projects as $project)
                <div class="card border-0 shadow-sm mt-4 mx-auto" style="width: 18rem;">
                    @if($project->image)

                    <img class="card-img-top" src="/storage/{{ $project->image}}" alt="{{ $project->title }} ">

                    @endif

                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('projects.show', $project) }}">
                                {{ $project->title}}
                            </a>
                        </h5>
                        <h6 class="card-text text-subtitle">{{ $project->created_at->format('d/m/y')}}</h6>
                        <p class="card-text text-truncate">{{ $project->description}}</p>
                        <a href="{{ route('projects.show', $project) }}" class="btn btn-primary btn-sm">
                            Ver más...
                        </a>
                    </div>
                </div>

                @empty
                <li class="list-group-item list-group-item-action list-group-item-light border-0 mb-3 shadow-sm">
                    No hay ningun proyecto para mostrar
                </li>
                @endforelse
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
