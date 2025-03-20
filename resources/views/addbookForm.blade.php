@extends('layouts.app')
@section('content')

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

@endsection
