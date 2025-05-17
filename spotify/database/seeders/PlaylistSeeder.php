<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rockClasico = new Playlist();
        $rockClasico->nombre = 'Rock Clasico';
        $rockClasico->descripcion = 'Mejores canciones de rock clásico.';
        $rockClasico->save();


        $anos8090 = new Playlist();
        $anos8090->nombre = 'Años 80/90';
        $anos8090->descripcion = 'Clásicos de las décadas de 1980 y 1990.';
        $anos8090->save();


        $novedades2023 = new Playlist();
        $novedades2023->nombre = 'Novedades 2023';
        $novedades2023->descripcion = 'Últimos éxitos musicales del 2023.';
        $novedades2023->save();


        $chill2024 = new Playlist();
        $chill2024->nombre = 'Chill 2024';
        $chill2024->descripcion = 'Canciones relajadas para el año 2024.';
        $chill2024->save();
    }
}
