@extends('layouts.plantilla')

@section('title', 'Podcast')

@section('content')


    @if (Auth::check())
        <h3 class="textoI">Login realizado {{ Auth::user()->name }} {{ Auth::user()->lastname }}</h3>
        <br>
        <div class="fondoC">
            @foreach ($podcasts as $podcast)
                <h3 class="textoI">{{ $podcast->nombre }}</h3>
                @if (Auth::check() && in_array($podcast->id, $favoritos))
                    <span style="color: red;">❤️</span>
                @else
                    <span style="color: white;">🤍</span>
                @endif
                <br>
            @endforeach
        </div>
        <br>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    @else
        @error('email')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <form action="{{ route('spotify.podcast') }}" method="POST">
            @csrf
            <label for="" class="textoI">Email:</label>
            <input type="text" name="email" required><br>
            <label for="" class="textoI">Contraseña:</label>
            <input type="text" name="password" required><br>
            <button type="submit">Iniciar Sesion</button>
        </form>
    @endif






@endsection
