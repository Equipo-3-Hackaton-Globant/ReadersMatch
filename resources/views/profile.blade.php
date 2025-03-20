@extends('layouts.app2')

@section('content')
    <div class="container mt-4">
        <h2>Mis Libros Ofrecidos</h2>

        @foreach ($user->books as $book)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset($book->imgURL)}}" class="img-fluid rounded img-thumbnail" style="height: 300px" alt="{{$book->title}}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{$book->title}}</h5>
                            <div class="row">
                                <div class="col">
                                    <h4 class="fs-5 text-decoration-underline">Author:</h4>
                                    <p>{{$book->author}}</p>
                                </div>
                                <div class="col">
                                    <h4 class="fs-5 text-decoration-underline">format:</h4>
                                    <p>{{$book->format}}</p>
                                </div>
                                <div class="col">
                                    <h4 class="fs-5 text-decoration-underline">Publisher:</h4>
                                    <p>{{$book->publisher}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="{{route('edit', $book->id)}}" class="btn btn-primary">Editar</a>
                                    <a href="{{route('book', $book->id)}}" class="btn btn-danger">Borrar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Mis Libros Favoritos</h2>

        @foreach ($user->favoriteBooks as $book)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset($book->imgURL)}}" class="img-fluid rounded img-thumbnail" style="height: 300px" alt="{{$book->title}}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{$book->title}}</h5>
                            <div class="row">
                                <div class="col">
                                    <h4 class="fs-5 text-decoration-underline">Author:</h4>
                                    <p>{{$book->author}}</p>
                                </div>
                                <div class="col">
                                    <h4 class="fs-5 text-decoration-underline">format:</h4>
                                    <p>{{$book->format}}</p>
                                </div>
                                <div class="col">
                                    <h4 class="fs-5 text-decoration-underline">Publisher:</h4>
                                    <p>{{$book->publisher}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

