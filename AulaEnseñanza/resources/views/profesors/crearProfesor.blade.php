@extends('layouts.plantilla')

@section('title', 'Crear Profesor')


@section('content')
    <h3>Crear Profesor</h3>



    <form action="{{ route('profesores.store') }}" method="POST" class="formulario" enctype="multipart/form-data">
        @csrf
        <label for="" class="label">Nombre</label><br>
        <input type="text" name="nombreApellido" value="{{ old('nombreApellido') }}" class="campotexto"><br>
        @error('nombreApellido')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label for="" class="label">Profesion</label><br>
        <select name="profesion" id="">
            @foreach ($profesiones as $profesion)
                <option value="{{ $profesion->id }}">{{ $profesion->nombre }}</option>
            @endforeach
        </select>
        @error('profesion')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <br>
        <label for="" class="label">Grado Academico</label><br>
        <input type="text" name="gradoAcademico" value="{{ old('gradoAcademico') }}" class="campotexto"><br>
        @error('gradoAcademico')
            <p class="text-red-500">{{ $message }}</p>
        @enderror


        <label for="" class="label">Telefono</label><br>
        <input type="text" name="telefono" value="{{ old('telefono') }}" class="campotexto">
        @error('telefono')
            <p class="text-red-500">{{ $message }}</p>
        @enderror


        <br>
        <label for="" class="label">Foto</label><br>
        <input type="file" name="foto" id="foto" class="selFoto">

        @error('foto')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <br>
        <button type="submit" class="botonEditar">Crear</button>
        <a href="{{ route('profesores.index') }}" class="botonEditar">Cancelar</a>
    </form>

@endsection
