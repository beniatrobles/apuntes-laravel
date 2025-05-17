@extends('layouts.plantilla')

@section('title', 'Alumnos')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Lista de alumnos</h1>

    <!-- Formulario de búsqueda -->
    <form action="{{ route('alumnos.index') }}" method="GET">
        <input type="text" name="buscar" placeholder="Buscar por nombre" value="{{ request('buscar') }}" class="campotexto">
        <button type="submit">Buscar</button>
    </form>

    @if($alumnos->count() > 0)
        <table class="tabla">
            <thead>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </thead>
            @foreach ($alumnos as $alumno)
                <tr class="tabla">
                    <td>
                        <img src="{{ asset($alumno->foto) }}" alt="" width="80">
                    </td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->edad }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->direccion }}</td>
                    <td>
                        <a href="{{ route('alumnos.edit', $alumno) }}" class="botonEditar">MODIFICAR</a>
                        <a href="{{ route('alumnos.confirm', $alumno) }}" class="botonEliminar">ELIMINAR</a>
                        <a href="{{ route('alumnos.verCursos', $alumno) }}" class="botonEditar">CURSOS</a>
                        <a href="{{ route('alumnos.matricula', $alumno) }}" class="botonEditar">MATRICULAR</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <!-- Paginación -->
        {{ $alumnos->links() }}

    @else
        <p>No se encontraron alumnos con ese nombre.</p>
    @endif
@endsection
