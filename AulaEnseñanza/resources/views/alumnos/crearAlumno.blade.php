@extends('layouts.plantilla')

@section('title', 'Crear Alumno')

@section('content')

    <h2>Crear Alumno Nuevo</h2>

    <form action="{{ route('alumnos.store') }}" method="POST" class="formulario" enctype="multipart/form-data">
        @csrf

        
        <label for="" class="label">Nombre</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') }}" class="campotexto"><br>
        @error('nombre')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        
        <label for="" class="label">Edad</label><br>
        <input type="text" name="edad" value="{{ old('edad') }}" class="campotexto"><br>
        @error('edad')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        
        <label for="" class="label">Telefono</label><br>
        <input type="text" name="telefono" value="{{ old('telefono') }}" class="campotexto"><br>
        @error('telefono')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        
        <label for="" class="label">Direccion</label><br>
        <input type="text" name="direccion" value="{{ old('direccion') }}" class="campotexto"><br>
        @error('direccion')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        
        <label for="" class="label">Foto</label><br>
        <input type="file" name="foto" id="foto" class="selFoto">
        @error('foto')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <br>
        <button type="submit" class="botonEditar">Crear</button>
        <a href="{{ route('alumnos.index') }}" class="botonEditar">Cancelar</a>
    </form>

@endsection