@extends('layouts.app2')
@section('content')
<div>
    <h1>{{$book->title}}</h1>
    <h3>Publicado por {{$book->user->name}}</h3>
    <img src="{{asset($book->imgURL)}}" alt="Portada del libro {{$book->title}}">
    <ul>
        <li>Autor: {{$book->author}}</li>
        <li>Ubicación: {{$book->user->location}}</li>
        <li>Formato: {{$book->format}}</li>
        <li>Observaciones: {{$book->observation}}</li>
    </ul>


    <button type="button" class="btn btn-primary" popovertarget="prueba" popovertargetaction="show">
        Intercambiar
    </button>

    <div popover="manual" id="prueba">

        Le avisamos a {{$book->user->name}} que te interesa el intercambio.
        Si {{$book->user->name}} también quiere hacer match se comunicará contigo.
        <button class="btn btn-primary" popovertarget="prueba" popovertargetaction="hide">Cerrar</button>
    </div>

</div>


@endsection