@extends('layouts.plantilla')
@section('title', 'Editar Curso')


@section('content')

    <h1>editar curso {{ $curso->nombre }}</h1>
    <form action="{{route('cursos.update',$curso)}}" class="formulario" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="" class="label">Nombre</label><br>
        <input type="text" class="campotexto" name="nombre" value="{{ $curso->nombre }}"><br>
        <label for="" class="label">Nivel: {{ $curso->nivel }}</label><br>
        <select name="nivel" id="">
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
        </select><br>
        <label for="" class="label">Horas Academicas</label><br>
        <input type="text" name="horasAcademicas" class="campotexto" value="{{ $curso->horasAcademicas }}"><br>
        <label for="">Profesor: {{ $curso->profesor->nombreApellido ?? 'No tiene profesor asignado' }}</label><br>
        <select name="profesor" id="">
            @foreach ($profesores as $profesor)
                <option value="{{ $profesor->id }}">{{ $profesor->nombreApellido }}</option>
            @endforeach

        </select>
        <br>
        <label for="" class="label">Foto</label><br>
        <input type="file" name="foto" id="foto" class="selFoto"><br>
        @if ($curso->foto)
            <img src="{{ asset($curso->foto) }}" alt="" width="80">
        @endif
        <br>
        <button type="submit" class="botonEditar">Actualizar</button>
        <a href="{{ route('cursos.index') }}" class="botonEditar">Cancelar</a>

    </form>



@endsection
