@extends('layouts.plantilla')

@section('title', 'Crear Curso')


@section('content')

    <h1>vista crear curso</h1>

    <form action="{{route('cursos.store')}}" method="POST" class="formulario" enctype="multipart/form-data">
        @csrf

        <label for="" class="label">Nombre</label><br>
        <input type="text" name="nombre" class="campotexto" value="{{old('nombre')}}"><br>
        @error('nombre')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label for="" class="label">Nivel</label><br>
        <select name="nivel" id="" class="campotexto">
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
        </select><br>

        @error('nivel')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label for="" class="label">Horas Academicas</label><br>
        <input type="number" class="campotexto" name="horasAcademicas" value="{{old('horasAcademicas')}}"><br>

        @error('horasAcademicas')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label for="" class="label">Profesor</label><br>

        <select name="profesor" class="campotexto">
            @foreach ($profesores as $profesor)
                <option value="{{ $profesor->id }}" {{ old('profesor') == $profesor->profesor_id ? 'selected' : '' }}>
                    {{ $profesor->nombreApellido }}
                </option>
            @endforeach
        </select><br>
        @error('profesor')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        

        <label for="" class="label">Foto</label><br>
        <input type="file" name="foto" id="foto" class="selFoto"><br><br>

        @error('foto')
            <p class="text-red-500">{{ $message }}</p>
        @enderror


        <button type="submit" class="botonEditar">Crear</button>
        <a href="{{ route('cursos.index') }}" class="botonEditar">Cancelar</a>

    </form>

@endsection
