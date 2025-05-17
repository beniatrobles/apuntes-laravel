@extends('layouts.plantilla')

@section('title','Borrar Profesor ' .$profesor->nombreApellido)

@section('content')
    <h3>¿¿Seguro que quieres borrar al profesor {{$profesor->nombreApellido}}??</h3>
    <img src="{{asset($profesor->foto)}}" alt="" width="80">
    <br><br>
    <form action="{{route('profesores.destroy', $profesor)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="botonEliminar">Eliminar</button>
        <a href="{{route('profesores.index')}}" class="botonEditar">Cancelar</a>

    </form>

@endsection