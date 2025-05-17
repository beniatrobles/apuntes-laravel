@extends('layouts.plantilla')

@section('title', 'Autores')


@section('content')
    <h1>Autores</h1>

    @foreach ($autores as $autor)
        <h1 class="autor">{{ $autor->nombre }}--{{ $autor->pais }}--<a href="{{route('autores.detalles',$autor->id)}}" class="botonG">Ver detalles</a>-- <a
                href="" class="botonG">Editar</a>-- <a href="" class="botonB">Eliminar</a></h1>
        @foreach ($autor->libros as $libro)
            <p> {{ $libro->titulo }}--{{ $libro->año_publicacion }}</p>
        @endforeach
    @endforeach
@endsection
