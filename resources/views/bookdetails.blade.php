@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $book->title }}</h1>
                <h3>Publicado por <span style="color: #239B8C;">{{ $book->user->name }}</span></h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <img src="{{ asset($book->imgURL) }}" class="card-img-top" alt="Portada del libro {{ $book->title }}">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Autor:</strong> {{ $book->author }}</li>
                            <li class="list-group-item"><strong>Ubicación:</strong> {{ $book->user->location }}</li>
                            <li class="list-group-item"><strong>Formato:</strong> {{ $book->format }}</li>
                            <li class="list-group-item"><strong>Observaciones:</strong> {{ $book->observation }}</li>
                        </ul>
                        <div class="mt-3">
                            <button type="button" class="btn btn-primary" popovertarget="prueba" popovertargetaction="show">
                                Intercambiar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div popover="manual" id="prueba">
                    Le avisamos a {{ $book->user->name }} que te interesa el intercambio.
                    Si {{ $book->user->name }} también quiere hacer match se comunicará contigo.
                    <button class="btn btn-primary" popovertarget="prueba" popovertargetaction="hide">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection