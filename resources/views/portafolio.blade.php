@extends('layout')

@section('title', 'Portafolio')

@section('content')
<h1>Portafolio</h1>

<ul>
    <!-- foreach utilizando blade-->
    @forelse ($portafolio as $portafolioItem)
        <li>{{ $portafolioItem['title'] }}</pre></li>
    @empty
        <li>No hay ningun proyecto para mostrar</li>
    @endforelse
</ul>

@endsection
