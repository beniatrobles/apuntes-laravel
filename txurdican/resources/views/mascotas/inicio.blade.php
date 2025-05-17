@extends('layouts.plantilla')

@section('title', 'Inicio')


@section('content')
    <div class="fondo">
        <h1 class="texto">TxurdiCAN-Mascotas</h1>
    </div>

    <div >
        <p class="texto1">En esta pagina encontraras la mascota que estas buscando.
            En txurdican-mascotas contamos con personal cualificado, que le
            asesoraran a lo largo del proceso de adopcion, ayundandole a elegir
            la mascota ideal para ti y tu familia.
            Y si quieres colaborar al cuidado de las mascotas que tenemos en nuestro refugio, ponte en contacto con
            nosotros.

        </p>
    </div>

    <div class="fondoFotos">
        <div>
            <img src="{{asset('Imagenes/voluntariadox.jpg')}}" alt="" width="200">
            <p class="p">Ayuda voluntaria</p>
        </div>
        <div>
            <img src="{{asset('Imagenes/acogidaperro.jpg')}}" alt="" width="200">
            <p class="p">Apadrina</p>
        </div>
        <div>
            <img src="{{asset('Imagenes/adopta.jpg')}}" alt="" width="200">
            <p class="p">Adopta</p>
        </div>
    </div>



@endsection
