@php
    $situacion = '';
    if ($mascota->adoptado == 1) {
        $situacion = 'No Adoptado';
    } else {
        $situacion = 'Adoptado';
    }
@endphp


@extends('layouts.plantilla')

@section('title', 'Detalles Mascota')

@section('content')
    @if ($origen == 'modificaciones')
        <div class="fondo">
            <p>Modificar mascota {{ $mascota->nombre }}</p>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="fondoDetalles">
            <div>
                <img src="{{ asset('Imagenes/' . $mascota->imagen) }}" alt="" width="500">
            </div>
            <div>
                <form action="{{ route('mascotas.updateMascota', $mascota->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="" class="label">Nombre</label><br>
                    <input type="text" value="{{ $mascota->nombre }}" class="input" name="nombre"><br>
                    <label for="" class="label">Raza:</label><br>

                    <select name="raza_id" id="raza_id">
                        @foreach ($razas as $raza)
                            <option value="{{ $raza->id }}"
                                {{ $mascota->raza_id == $raza->id ? 'selected' : '' }}>
                                {{ $raza->nombre_raza }}
                            </option>
                        @endforeach
                    </select>


                    {{-- <input type="text" value="{{ $mascota->raza->nombre_raza }}" disabled class="input"> --}}<br><br>
                    <label for="">Situacion</label>
                    <input type="radio" value="1" name="adopcion" {{ $mascota->adoptado == 1 ? 'checked' : '' }}>
                    ADOPTADO
                    <input type="radio" value="0" name="adopcion" {{ $mascota->adoptado == 0 ? 'checked' : '' }}> NO
                    ADOPTADO
                    <br>
                    <label for="" class="label">Foto</label><br>
                    <input type="file" name="foto" id="foto" class="selFoto">

                    <p>{{ $mascota->imagen }}</p>

                    <div class="fondoBotones">
                        <button type="submit" class="botonA">Modificar</button>
                        <a href="{{ route('mascotas.modificacionesMascota') }}" class="botonV">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    @elseif ($origen == 'sinAdoptar')
        <div class="fondo">
            <p>Ver/Cambiar situacion {{ $mascota->nombre }}</p>
        </div>
        <div class="fondoDetalles">
            <div>
                <img src="{{ asset('Imagenes/' . $mascota->imagen) }}" alt="" width="200">
            </div>
            <div>
                <form action="{{ route('mascotas.cambiarSituacion', $mascota->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="" class="label">Nombre</label><br>
                    <input type="text" value="{{ $mascota->nombre }}" disabled class="input"><br>
                    <label for="" class="label">Raza:</label><br>
                    <select name="" id="" disabled>
                        <option value="">{{ $mascota->raza->nombre_raza }}</option>
                    </select>
                    {{-- <input type="text" value="{{ $mascota->raza->nombre_raza }}" disabled class="input"> --}}<br><br>
                    <label for="">Situacion</label>
                    <input type="radio" value="1" name="adopcion" {{ $mascota->adoptado == 1 ? 'checked' : '' }}>
                    ADOPTADO
                    <input type="radio" value="0" name="adopcion" {{ $mascota->adoptado == 0 ? 'checked' : '' }}> NO
                    ADOPTADO


                    <div class="fondoBotones">
                        <button type="submit" class="botonA">Cambiar a {{ $situacion }}</button>
                        <a href="{{ route('mascotas.sinAdoptar') }}" class="botonV">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    @else
        <p>Vista abierta directamente.</p>
    @endif


@endsection
