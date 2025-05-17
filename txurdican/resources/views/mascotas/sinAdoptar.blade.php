@extends('layouts.plantilla')

@section('title', 'Mascotas sin Adoptar')


@section('content')

    <div class="fondo">
        <p>Txurdican Nuestras mascotas sin adoptar</p>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($mascotas->count() == 0)
        <p>No hay mascotas para adoptar</p>
    @endif
    <div class="mascotas">
        @foreach ($mascotas as $mascota)
            <div class="mascotas1">

                <img src="{{ asset('Imagenes/' . $mascota->imagen) }}" alt="" width="300">
                <p class="p">{{ $mascota->nombre }}</p>
                <a href="{{ route('mascotas.detallesMascota', ['id' => $mascota->id, 'from' => 'sinAdoptar']) }}" class="botonV">
                    Ver mas informacion
                </a>


            </div>
        @endforeach
    </div>
    {{ $mascotas->links() }}

@endsection
