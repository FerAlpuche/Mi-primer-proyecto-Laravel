@extends('layout')

@section('title', 'Contact')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form method="POST" action="{{ route('contact') }}" class="bg-white shadow rounded py-3 px-4">
                <h1 class="display-4">{{ __('Contact') }}</h1>
                <hr>
                <!-- 
                la direciva "csrf" crea un campo oculto donde estar ael token del usuario
                 esto eviatra el errore 419 "sesion expirada" 
            -->
                @csrf
                <div class="mb-3">
                    <label for="name">Nombre</label>
                    <input class="form-control" name="name" placeholder="Nombre.. " value="{{ old('name') }}"><br>
                    {!! $errors->first('name', '<small>:message</small><br>') !!}
                </div>

                <div class="mb-3">
                    <label for="name">Email</label>
                    <input class="form-control" type="text" name="email" placeholder="Email... "
                        value="{{ old('email') }}"><br>
                    {!! $errors->first('email', '<small>:message</small><br>') !!}
                </div>

                <div class="mb-3">
                    <label for="name">Asunto</label>
                    <input class="form-control" name="subject" placeholder="Asunto... "
                        value="{{ old('subject') }}"><br>
                    {!! $errors->first('subject', '<small>:message</small><br>') !!}
                </div>

                <div>
                    <label for="name">Mensaje</label>
                    <textarea class="form-control" name="content"
                        placeholder="Mensaje...">{{ old('content') }}</textarea><br>
                    {!! $errors->first('content', '<small>:message</small><br>') !!}
                </div>

                <button class="btn btn-outline-success btn-lg">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection
