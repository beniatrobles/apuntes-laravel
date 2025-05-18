@extends('layouts.plantilla')


@section('title', 'Libros')


@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <h1>Listado de libros</h1>
    <a href="{{ route('libros.crear') }}" class="botonG">Crear Libro</a>
    @foreach ($libros as $libro)
        <h2 class="autor">{{ $libro->titulo }}--{{ $libro->autor->nombre }}--{{ $libro->año_publicacion }}</h2>
        @foreach ($libro->opiniones as $opinion)
            @if ($opinion->valoracion >= 3)
                <p>{{ $opinion->valoracion }}--{{ $opinion->comentario }}--{{ $opinion->nombre_usuario }}</p>
            @else
                <p>{{ $opinion->valoracion }}--vaya mierda de libro--{{ $opinion->nombre_usuario }}</p>
            @endif
        @endforeach
    @endforeach

    {{ $libros->links() }}

@endsection
