@extends('layouts.plantilla')

@section('title', 'Autores')


@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Autores</h1>

    <a href="{{route('autores.crear')}}" class="botonG">Crear Autor</a>

    @foreach ($autores as $autor)
        <h1 class="autor">{{ $autor->nombre }}--{{ $autor->pais }}--<a href="{{ route('autores.detalles', $autor->id) }}"
                class="botonG">Ver detalles</a>-- <a href="{{route('autores.editar',$autor->id)}}" class="botonG">Editar</a>-- <a
                href="{{ route('autores.confirmar', $autor) }}" class="botonB">Eliminar</a></h1>
        @foreach ($autor->libros as $libro)
            <p> {{ $libro->titulo }}--{{ $libro->año_publicacion }}</p>
        @endforeach
    @endforeach
@endsection
