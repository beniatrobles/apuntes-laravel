@extends('layouts.plantilla')

@section('title','Detalles Autor')

@section('content')
    <h1>Detalles del autor: {{$autor->nombre}}</h1>
    <h3>Pais: {{$autor->pais}}</h3>
    @foreach ($autor->libros as $libro)
        <p>{{$libro->titulo}}</p>
        
    @endforeach

    <a href="{{route('autores.index')}}" class="botonG">Volver</a>
@endsection