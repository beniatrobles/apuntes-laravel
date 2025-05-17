<?php

namespace Database\Seeders;

use App\Models\Podcast;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PodcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $podcast = new Podcast();
        $podcast->nombre = 'Nadie sabe nada';
        $podcast->descripcion = 'Andreu Buenafuente y Berto';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'La pija y la quinqui';
        $podcast->descripcion = 'Carlos Peguer y Mariang';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'Estirando el chicle';
        $podcast->descripcion = 'Carolina Iglesias y Victoria Martín';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'Lo que tú digas con Alex Fidalgo';
        $podcast->descripcion = 'Álex Fidalgo';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'The Wild Project';
        $podcast->descripcion = 'Jordi Wild';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'La Ruina';
        $podcast->descripcion = 'Tomàs Fuentes e Ignasi Taltavull';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = '¡Poco se Habla!';
        $podcast->descripcion = 'Briten y Xuso Jones';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'Crims';
        $podcast->descripcion = 'Carles Porta';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'Sofá, manta y crimen';
        $podcast->descripcion = 'Coral y Yayo';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'Buenismo Bien';
        $podcast->descripcion = 'Quique Peinado, Henar Alvarez y Manuel Burque';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'Tentación a Medianoche';
        $podcast->descripcion = 'Podium Podcast';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'Redención';
        $podcast->descripcion = 'novela de Ray Loriga';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'The Joe Rogan Experience';
        $podcast->descripcion = 'Joe Rogan';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'TED Radio Hour';
        $podcast->descripcion = 'Guy Raz';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'This American Life';
        $podcast->descripcion = 'Ira Glass';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'Serial';
        $podcast->descripcion = 'Sarah Koenig';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'Suena Carmena';
        $podcast->descripcion = 'Carmena';
        $podcast->save();

        $podcast = new Podcast();
        $podcast->nombre = 'Por si las voces vuelven';
        $podcast->descripcion = 'Ángel Martín';
        $podcast->save();

    }
}
