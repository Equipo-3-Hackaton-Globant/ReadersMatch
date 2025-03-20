@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
            <div class="col-md-8">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
</div>

<div>
<h1>{{$book->title}}</h1>
        <h3>Publicado por {{$book->user->name}}</h3>
        <img src="asset{{book->imgURL}}" alt="Portada del libro {{$book->title}}">
        <ul>       
        <li>Autor: {{$book->author}}</li>
        <li>Ubicación: {{$book->user->location}}</li>
        <li>Formato: {{$book->format}}</li>
        <li>Observaciones: {{$book->observation}}</li>
        </ul> 
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="swaprequestmodal">
            Intercambiar
          </button>
          <div class="modal fade" id="swaprequestmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Estás a un paso de hacer match</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <p>Le avisamos a {{$book->user->name}} que te interesa el intercambio.</p>
          <p>Si {{$book->user->name}} también quiere hacer match se comunicará contigo.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
</div>


@endsection