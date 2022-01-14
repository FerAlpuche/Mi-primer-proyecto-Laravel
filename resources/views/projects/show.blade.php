@extends('layout')

@section('title', $project->title)

@section('content')

<br>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            @if($project->image)

            <img class="card-img-top" src="/storage/{{ $project->image}}" alt="{{ $project->title }} ">

            @endif


            <div class="bg-white shadow rounded p-5">
                <div class="card-body">
                    <h1 class="display-4">{{ $project->title }}</h1>
                    <hr>
                    <p>{{ $project->description }}</p>
                    <p class="text-secondary">Fecha de creación: {{ $project->created_at->format('d/m/Y')}}</p>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href=" {{ route('projects.index')}}">
                            Regresar
                        </a>

                        @auth
                        <div class="btn-group btn-group-sm">
                            <a href=" {{ route('projects.edit', $project) }}" type="button"
                                class="btn btn-outline-primary">
                                Editar
                            </a>
                            <a href="#" class="btn btn-outline-danger"
                                onclick="document.getElementById('delete-project').submit()">
                                Eliminar
                            </a>

                        </div>

                        <form id="delete-project" method="POST" action="{{ route('projects.destroy', $project) }}" class="d-none">

                            @csrf @method('DELETE')
                        </form>
                        @endauth
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
