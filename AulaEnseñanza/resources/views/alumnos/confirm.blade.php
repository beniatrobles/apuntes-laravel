@extends('layouts.plantilla')

@section('title', 'Borrar Alumno // ' .$alumno->nombre)


@section('content')

    {{-- <h1>Aqui se confirma el borrado del alumno {{$alumno->nombre}}</h1> --}}

    <h3>¿¿Estas seguro que quieres borrar a {{ $alumno->nombre }}??</h3>
    <img src="{{asset($alumno->foto)}}" alt="" width="80">
    <br><br>

    <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST">
        @csrf
        @method('delete')

        <button type="submit" class="botonEliminar">Eliminar</button>
        <a href="{{ route('alumnos.index') }}" class="botonEditar">Cancelar</a>
    </form>




@endsection
