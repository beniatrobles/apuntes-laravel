@extends('layouts.plantilla')

@section('title', 'Modificaciones')


@section('content')

    <div class="fondo">
        <p>Txurdican-Mascotas</p>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table>
        <thead>
            <th>Nombre</th>
            <th>Raza</th>
            <th>¿Adoptado?</th>
            <th>imagen</th>
            <th>Action</th>
        </thead>
        @foreach ($mascotas as $mascota)
            @php
                $situacion = '';
                $boton = '';
                $nuevoEstado = 0;
                if ($mascota->adoptado == 1) {
                    $situacion = 'Adoptado';
                    $boton = 'No Adoptado';
                    $nuevoEstado = 0;
                } else {
                    $situacion = 'No Adoptado';
                    $boton = 'Adoptado';
                    $nuevoEstado = 1;
                }
            @endphp

            <tr>
                <td>{{ $mascota->nombre }}</td>
                <td>{{ $mascota->raza->nombre_raza }}</td>
                <td>{{ $situacion }}</td>
                <td><img src="{{ asset('Imagenes/' . $mascota->imagen) }}" alt="" width="50"></td>
                <td>
                    <form action="{{ route('mascotas.cambiarSituacion2', $mascota->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="adopcion" value="{{ $nuevoEstado }}">
                        <button type="submit" class="botonA">Cambiar a {{ $boton }}</button>
                        <a href="{{ route('mascotas.detallesMascota', ['id' => $mascota->id, 'from' => 'modificaciones']) }}" class="botonV">
                            Editar
                        </a>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
