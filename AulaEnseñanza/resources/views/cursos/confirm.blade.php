@extends('layouts.plantilla')

@section('title', 'Borrar Curso ' . $curso->nombre)

@section('content')
    <h3>¿¿Estas seguro que quieres borrar el curso "{{ $curso->nombre }}"??</h3>
    <img src="{{ asset($curso->foto) }}" alt="" width="300">
    <br><br>
    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="botonEliminar">Borrar</button>
        <a href="{{ route('cursos.index') }}" class="botonEditar">Cancelar</a>
    </form>
@endsection
