@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Listado de cursos</h1>

    <form action="{{ route('cursos.index') }}" method="GET">
    <div>
        @foreach($todosCursos as $cursoNombre)
            <label style="display: block;">
                <input type="checkbox" name="buscar[]" value="{{ $cursoNombre }}"
                    {{ in_array($cursoNombre, (array) request('buscar')) ? 'checked' : '' }}>
                {{ $cursoNombre }}
            </label>
        @endforeach
    </div>
    <button type="submit">Filtrar</button>
</form>

    <p class="uwu">Usare un componente</p>

    <div class="fueraComponente">
        @if ($cursos->count())
            @foreach ($cursos as $curso)
                <x-listado-cursos :curso="$curso">
                    <x-slot name='nombre'>
                        {{ $curso->nombre }}
                    </x-slot>

                    <x-slot name='nivel'>
                        {{ $curso->nivel }}
                    </x-slot>

                    <x-slot name='horas'>
                        {{ $curso->horasAcademicas }}
                    </x-slot>

                    <x-slot name='foto'>
                        {{ $curso->foto }}
                    </x-slot>

                    <x-slot name='profesor'>
                        {{ $curso->profesor->nombreApellido ?? ' Profesor no asignado' }}
                    </x-slot>
                </x-listado-cursos>
            @endforeach
        @else
            <p>No se encontraron cursos con ese nombre.</p>
        @endif
    </div>
@endsection
