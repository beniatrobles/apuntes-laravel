@extends('layouts.plantilla')

@section('title', 'Matricular')

@section('content')
    <h2>Matricular alumn@: {{ $alumno->nombre }}</h2>

    <form action="{{route('alumnos.matricular', $alumno)}}" method="POST">
        @csrf
        @method('PUT')

        @foreach ($cursos as $curso)
            <div class="listaAlumnos">
                <input type="checkbox" name="cursos[]" value="{{ $curso->id }}"
                    {{ $alumno->cursos->contains($curso->id) ? 'checked' : '' }}>
                <label>{{ $curso->nombre }}</label>
            </div>
        @endforeach
            <br>
        <button type="submit" class="botonEditar">Matricular</button>
    </form>
    <br><br>

    <a href="{{route('alumnos.index')}}" class="botonEditar">Volver</a>
@endsection
