@extends('layouts.plantilla')

@section('title','Editar autor')


@section('content')
    
<h1>Editar autor: {{$autor->nombre}}</h1>


<a href="{{route('autores.index')}}" class="botonG">Volver</a>
@endsection