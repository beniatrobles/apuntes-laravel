@extends('layouts.plantilla')

@section('title','Editar Alumno')
 
@section('content')
    <h3>Editar alumno: {{$alumno->nombre}}</h3>
    <br><br>
    <form action="{{route('alumnos.update',$alumno)}}" method="POST" enctype="multipart/form-data" class="formulario">
        @csrf
        @method('put')
        <label for="" class="label">Nombre</label><br>
        <input type="text" name="nombre" value="{{$alumno->nombre}}" class="campotexto"><br>
        <label for="" class="label">Edad</label><br>
        <input type="text" name="edad" value="{{$alumno->edad}}" class="campotexto"><br>
        <label for="" class="label">Telefono</label><br>
        <input type="text" name="telefono" value="{{$alumno->telefono}}" class="campotexto"><br>
        <label for="" class="label">Direccion</label><br>
        <input type="text" name="direccion" value="{{$alumno->direccion}}" class="campotexto"><br>
        <label for="" class="label">Foto</label><br>
        <input type="file" name="foto" id="foto" class="selFoto">

        @if ($alumno->foto)
            <img src="{{ asset($alumno->foto)}}" alt="" width="80">
        @endif
        <br>
        <button type="submit" class="botonEditar">Actualizar</button>
        <a href="{{route('alumnos.index')}}" class="botonEditar">Cancelar</a>
    </form>

@endsection