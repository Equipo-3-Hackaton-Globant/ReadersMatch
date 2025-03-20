@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="d-flex" action="{{ route('search') }}" method="GET">
                    <input class="form-control me-2" type="search" name="query" placeholder="Buscar por título o autor" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 py-4">
                <h3> Detalle de tu Libro </h3>
                <div class="row">
                    @if($book)
                    <div class="card">
                        <img class="card-img-top" src="{{ asset($book->imgURL) }}" alt="Portada del libro: {{ $book->title }} de {{ $book->author }}">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->title}}</h5>
                            <p class="card-text">{{$book->author}}</p>
                            <a href="{{route('bookdetails', ['book' => $book->id])}}" class="btn btn-primary" aria-label="Detalles del libro {{ $book->title }}">Detalles</a>
                        </div>
                    </div>
                @else
                    <p>Libro no encontrado.</p>
                @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
@endsection