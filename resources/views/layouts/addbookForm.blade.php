<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mis Libros</title>
    <!-- Agregar tus estilos CSS o los de Bootstrap, si lo necesitas -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="{{ config('app.name', 'Laravel') }}" height="30">
                {{ config('app.name', 'Laravel') }}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Mi perfil') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Mis Libros Ofrecidos -->
    <div class="container mt-4">
        <h1>Mis Libros Ofrecidos</h1>

        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="offered_title" placeholder="Título del libro">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="offered_author" placeholder="Autor">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="offered_publisher" placeholder="Editorial">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="offered_observation" placeholder="Observación">
            </div>
        </form>
    </div>

    <!-- Mis Libros Favoritos -->
    <div class="container mt-4">
        <h1>Mis Libros Favoritos</h1>

        <ul>
            @foreach ($user->books as $book)
                <li>{{ $book->title }}</li>
            @endforeach
        </ul>

        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="fav_title" placeholder="Título del libro">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="fav_author" placeholder="Autor">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="fav_publisher" placeholder="Editorial">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="fav_observation" placeholder="Observación">
            </div>
        </form>
    </div>

</div>

<!-- Scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
