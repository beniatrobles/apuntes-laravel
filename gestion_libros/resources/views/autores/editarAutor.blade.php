@extends('layouts.plantilla')

@section('title','Editar autor')


@section('content')
    
<h1>Editar autor: {{$autor->nombre}}</h1>
<form action="{{route('autores.update',$autor)}}" method="POST">
    @csrf
    @method('put')
    <label for="">Nombre</label><br>
    <input type="text" name="nombre" value="{{$autor->nombre}}"><br>
    <label for="">Pais</label><br>
    <input type="text" name="pais" value="{{$autor->pais}}"><br>

    <button type="submit" class="botonG">Editar</button>
    <br>
    <br>
</form>

<a href="{{route('autores.index')}}" class="botonG">Volver</a>
@endsection