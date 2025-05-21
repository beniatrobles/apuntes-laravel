@extends('layouts.plantilla')
@section('title', 'Profesores')


@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>Lista de profesores</h1>
    <!-- Formulario de búsqueda -->
    <form action="{{ route('profesores.index') }}" method="GET">
        <select name="buscar" onchange="this.form.submit()" class="campotexto">
            <option value="">-- Selecciona un profesor --</option>
            @foreach ($todosProfesores as $profesor)
                <option value="{{ $profesor->nombreApellido }}"
                    {{ request('buscar') == $profesor->nombreApellido ? 'selected' : '' }}>
                    {{ $profesor->nombreApellido }}
                </option>
            @endforeach
        </select>
    </form>
    @if ($profesores->count() > 0)
        <div class="contenedorProfesores">
            @foreach ($profesores as $profesor)
                <div class="fondoProfesor">
                    <h2>{{ $profesor->nombreApellido }}</h2>
                    <img src="{{ asset($profesor->foto) }}" alt="" width="150">
                    <h3>{{ $profesor->profesion }}</h3>
                    <h3>{{ $profesor->gradoAcademico }}</h3>
                    <h3>{{ $profesor->telefono }}</h3>
                    <br>
                    <div class="accionesProfesores">
                        <a href="{{ route('profesores.edit', $profesor) }}" class="botonEditar">MODIFICAR</a>
                        <a href="{{ route('profesores.confirm', $profesor) }}" class="botonEliminar">ELIMINAR</a>
                    </div>
                </div>
            @endforeach
        </div>



        {{ $profesores->links() }}
    @else
        <p>No se encontraron profesores con ese nombre.</p>
    @endif

@endsection
