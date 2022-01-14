<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="{{ setActive('home') }}, nav-item" class="nav-item">
            <a class="nav-link active" href="{{ route('home') }}">@lang('Home')</a>
        </li>
        <li class="{{ setActive('about') }}">
            <a class="nav-link active" href="{{ route('about') }}">@lang('About')</a>
        </li>
        <li class="{{ setActive('projects.*') }}">
            <a class="nav-link active" href="{{ route('projects.index') }}">@lang('Projects')</a>
        </li>
        <li class="{{ setActive('contact') }}">
            <a class="nav-link active" href="{{ route('contact') }}">@lang('Contact')</a>
        </li>
        {{-- Con "guest" hacemos que si esta logeado el usuario ya no vea la opcion de login
y si es invitado, la podra ver --}}
        @guest
        <li>
            <a class="nav-link active" href="{{ route('login') }}">Login</a>
        </li>

        @else

        <li>
            <a class="nav-link active"  
               href="" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">Cerrar sesion</a>
        </li>
        @endguest
        </ul>
      </div>
    </div>
  </nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
