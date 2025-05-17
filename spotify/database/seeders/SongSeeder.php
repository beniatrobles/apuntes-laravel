<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rockClasico = Playlist::where('nombre', 'Rock Clásico')->first();

    $rockClasico->songs()->createMany([
        ['nombre' => 'Stairway to Heaven', 'artista' => 'Led Zeppelin'],
        ['nombre' => 'Paint It Black', 'artista' => 'The Rolling Stones'],
        ['nombre' => 'Bohemian Rhapsody', 'artista' => 'Queen'],
        ['nombre' => 'Comfortably Numb', 'artista' => 'Pink Floyd'],
        ['nombre' => 'Hotel California', 'artista' => 'The Eagles'],
        ['nombre' => 'Back in Black', 'artista' => 'AC/DC'],
        ['nombre' => 'Sweet Child o\' Mine', 'artista' => 'Guns N\' Roses'],
        ['nombre' => 'Purple Haze', 'artista' => 'Jimi Hendrix'],
        ['nombre' => 'Baba O\'Riley', 'artista' => 'The Who'],
        ['nombre' => 'Sweet Home Alabama', 'artista' => 'Lynyrd Skynyrd'],
    ]);


    $chill2024 = Playlist::where('nombre', 'Chill 2024')->first();

    $chill2024->songs()->createMany([
        ['nombre' => 'Come Away With Me', 'artista' => 'Norah Jones'],
        ['nombre' => 'Banana Pancakes', 'artista' => 'Jack Johnson'],
        ['nombre' => 'Smooth Operator', 'artista' => 'Sade'],
        ['nombre' => 'Fix You', 'artista' => 'Coldplay'],
        ['nombre' => 'Summertime Sadness', 'artista' => 'Lana Del Rey'],
        ['nombre' => 'Gravity', 'artista' => 'John Mayer'],
        ['nombre' => 'Heartbeats', 'artista' => 'José González'],
        ['nombre' => 'Holocene', 'artista' => 'Bon Iver'],
        ['nombre' => 'Open', 'artista' => 'Rhye'],
        ['nombre' => 'Teardrop', 'artista' => 'Massive Attack'],
    ]);

    $anos8090 = Playlist::where('nombre', 'Años 80/90')->first();

    $anos8090->songs()->createMany([
        ['nombre' => 'Billie Jean', 'artista' => 'Michael Jackson'],
        ['nombre' => 'Like a Prayer', 'artista' => 'Madonna'],
        ['nombre' => 'Purple Rain', 'artista' => 'Prince'],
        ['nombre' => 'I Wanna Dance with Somebody', 'artista' => 'Whitney Houston'],
        ['nombre' => 'Careless Whisper', 'artista' => 'George Michael'],
        ['nombre' => 'Smells Like Teen Spirit', 'artista' => 'Nirvana'],
        ['nombre' => 'Wannabe', 'artista' => 'Spice Girls'],
        ['nombre' => 'With or Without You', 'artista' => 'U2'],
        ['nombre' => 'Wonderwall', 'artista' => 'Oasis'],
        ['nombre' => 'Livin\' on a Prayer', 'artista' => 'Bon Jovi'],
    ]);

    $novedades2023 = Playlist::where('nombre', 'Novedades 2023')->first();

    $novedades2023->songs()->createMany([
        ['nombre' => 'Bad Guy', 'artista' => 'Billie Eilish'],
        ['nombre' => 'Blinding Lights', 'artista' => 'The Weeknd'],
        ['nombre' => 'Don\'t Start Now', 'artista' => 'Dua Lipa'],
        ['nombre' => 'Shape of You', 'artista' => 'Ed Sheeran'],
        ['nombre' => 'drivers license', 'artista' => 'Olivia Rodrigo'],
        ['nombre' => 'Leave The Door Open', 'artista' => 'Silk Sonic (Bruno Mars, Anderson .Paak)'],
        ['nombre' => 'Say So', 'artista' => 'Doja Cat'],
        ['nombre' => 'Peaches', 'artista' => 'Justin Bieber'],
        ['nombre' => 'Easy On Me', 'artista' => 'Adele'],
        ['nombre' => 'Willow', 'artista' => 'Taylor Swift'],
    ]);
    }
}
