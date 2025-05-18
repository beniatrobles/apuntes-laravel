@extends('layouts.plantilla')


@section('title','Crear Libros')
    

@section('content')

<h1>Crear libro</h1>
<form action="{{route('libros.store')}}" method="POST">
    @csrf
    <label for="">Titulo</label><br>
    <input type="text" name="titulo" value="{{old('titulo')}}"><br>
     @error('titulo')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    <label for="">Año de publicacion</label><br>
    <input type="number" name="año_publicacion" value="{{old('año_publicacion')}}"><br>
     @error('año_publicacion')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    <label for="">Autor</label><br>
    <select name="autor" id="">

        @foreach ($autores as $autor)
            <option value="{{$autor->id}}">{{$autor->nombre}}</option>
        @endforeach
    </select><br><br>
    <button type="submit" class="botonG">Crear</button>
</form>
    
<br>
<a href="{{route('libros.index')}}" class="botonG">Volver</a>
@endsection