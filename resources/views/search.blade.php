@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1> Libros Encontrados </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="d-flex" action="{{ route('search') }}" method="GET">
                    <input class="form-control me-2" type="search" name="search" placeholder="Buscar por título o autor" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 py-4">
                    @foreach($books as $book)
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset($book->imgURL) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$book->title}}</h5>
                                    <p class="card-text">{{$book->author}}</p>
                                    <a href="{{route('book', $book->id)}}" class="btn btn-primary">{{"Detalles"}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection