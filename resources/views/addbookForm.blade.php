@extends('layouts.app')

@section('content')

    <!-- Mis Libros Ofrecidos -->
    <div class="container mt-4">
        <h1>Añadir Libro</h1>

        <form>
            <div class="form-group mb-4">
                <input type="text" class="form-control " id="offered_title" placeholder="Título del libro">
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control" id="offered_author" placeholder="Autor">
            </div>
            <div class="form-group  mb-4">
                <input type="text" class="form-control" id="offered_publisher" placeholder="Ubicación">
            </div>
            <div class="form-group  mb-4">
                <input type="text" class="form-control" id="offered_observation" placeholder="Formato">
                    <select class="form-select" id="format" name="format">
                        <option value="papel">Papel</option>
                        <option value="braille">Braille</option>
                    </select>
            </div>
            <div class="form-group  mb-4">
                <input type="text" class="form-control" id="fav_title" placeholder="imagen">
            </div>
            <div class="form-group  mb-4">
                <textarea class="form-control" id="fav_author" placeholder="Observaciones" rows="4"></textarea>
            </div>
            </form>
    </div>

@endsection
