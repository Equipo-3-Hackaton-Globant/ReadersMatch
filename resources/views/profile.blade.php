@extends('layouts.app2')

@section('content')


    <div class="container mt-4">
        <h1>Mis Libros Ofrecidos</h1>

            <form>
            @foreach($user->books as $book)
                <div class="form-group">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" id="offered_title" placeholder="Título del libro">
                        <a class="dropdown-item" href="{{ route('edit',$book->id) }}">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="bi bi-pencil"></i>
                        </button>
                        </a>

                        <button class="btn btn-outline-secondary" type="button">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>

                @endforeach
            </form>
    </div>


    <div class="container mt-4">
        <h1>Mis Libros Favoritos</h1>

        <ul>
            @foreach ($user->favoriteBooks as $book)
                <li>{{ $book->title }}</li>
            @endforeach
        </ul>


    @foreach($user->favoriteBooks as $book)
        <p>si</p>
    </div>
    @endforeach

@endsection

