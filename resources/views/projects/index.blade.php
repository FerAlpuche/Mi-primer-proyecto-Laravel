@extends('layout')

@section('title', 'Portafolio')

@section('content')
<h1>Proyectos</h1>

<ul>
    <!-- ferelse utilizando blade-->
    @forelse ($projects as $project)
        <li>
            <a href="{{ route('projects.show', $project) }}">{{ $project->title }} </a>
        </li>
    @empty
        <li>No hay ningun proyecto para mostrar</li>
    @endforelse
    {{ $projects->links() }}
</ul>

@endsection
