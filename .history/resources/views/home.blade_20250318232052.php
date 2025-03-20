@extends('layouts.app')

@section('content')
    <!-- <div id="login">

        </div> -->
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3> Hola,{{ Auth::user()->name }} </h3>
                <h1> Encuentra tu Libro </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 py-4">
                <h3> Ultimos Publicados </h3>
                <div>

                    <div class="card" style="width: 100vh;">
                        <img class="card-img-left” src="/public/images/book1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Libro</h5>
                            <p class="card-text">Autor</p>
                            <a href="#" class="btn btn-primary">Detalles</a>
                        </div>

                        <div class="card" style="width: 100vh;">
                            <img class="card-img-left” src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Nombre del Libro</h5>
                                <p class="card-text">Autor</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <!-- {{ __('You are logged in!') }} -->
        <!-- <div id="example"></div> -->
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
