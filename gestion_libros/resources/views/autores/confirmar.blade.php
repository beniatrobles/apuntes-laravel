@extends('layouts.plantilla')

@section('title', 'Confirmar borrado')


@section('content')
    <h1>¿¿¿ Seguro que quieres borrar al autor: {{ $autor->nombre }} ???</h1>
    <form action="{{route('autores.destroy', $autor)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="botonB">Confirmar</button>
    </form>

    <a href="{{ route('autores.index') }}" class="botonG">Cancelar</a>
@endsection
