@extends('layouts.plantilla')

@section('title', 'Buscar')


@section('content')
    <form action="{{route('spotify.buscar')}}" method="GET">
        <input type="text" name="buscar" placeholder="Buscar por nombre" value="{{ request('buscar') }}">
        <button type="submit">Buscar</button>
    </form>
    {{-- <h1 class="texto">buscar</h1> --}}

    @if ($songs->count() > 0)
        @foreach ($songs as $song)
            <div class="contenedorC">
                <div class="fondoC">
                    <p class="cancion">{{ $song->nombre }}-{{ $song->artista }}</p>
                </div>

                <div class="fondoP">
                    <p class="playlist">Playlist: {{ $song->playlist->nombre }}</p>
                </div>


            </div>
        @endforeach

    @else
            <p class="texto">No ae han encontrado canciones con ese nombre</p>
    @endif

@endsection
