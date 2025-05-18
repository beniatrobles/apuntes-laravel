@extends('layouts.plantilla')

@section('title','crearAutor')


@section('content')
    <h1>crear Autor</h1>
    <form action="{{route('autores.store')}}" method="POST">
        @csrf
        <label for="">Nombre</label><br>
        <input type="text" name="nombre" value="{{old('nombre')}}"><br>
        @error('nombre')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label for="">Pais</label>
        <br>
        <input type="text" name="pais" value="{{old('pais')}}"><br>
        @error('pais')
            <p class="text-red-500">{{ $message }}</p>
        @enderror


        <button type="submit" class="botonG">Crear</button>
    </form>

@endsection