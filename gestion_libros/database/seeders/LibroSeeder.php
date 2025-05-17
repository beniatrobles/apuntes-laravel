<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libro1 = new Libro();
        $libro1->titulo = 'Harry Potter y la piedra filosofal';
        $libro1->año_publicacion = 1997;
        $libro1->autor_id = 1;
        $libro1->save();

        $libro2 = new Libro();
        $libro2->titulo = 'Harry Potter y la cámara secreta';
        $libro2->año_publicacion = 1998;
        $libro2->autor_id = 1;
        $libro2->save();

        $libro3 = new Libro();
        $libro3->titulo = 'El señor de los anillos: La comunidad del anillo';
        $libro3->año_publicacion = 1954;
        $libro3->autor_id = 2;
        $libro3->save();

        $libro4 = new Libro();
        $libro4->titulo = 'El señor de los anillos: Las dos torres';
        $libro4->año_publicacion = 1954;
        $libro4->autor_id = 2;
        $libro4->save();

        $libro5 = new Libro();
        $libro5->titulo = 'El señor de los anillos: El retorno del rey';
        $libro5->año_publicacion = 1955;
        $libro5->autor_id = 2;
        $libro5->save();

        $libro6 = new Libro();
        $libro6->titulo = 'Cien años de soledad';
        $libro6->año_publicacion = 1967;
        $libro6->autor_id = 3;
        $libro6->save();

        $libro7 = new Libro();
        $libro7->titulo = 'Crónica de una muerte anunciada';
        $libro7->año_publicacion = 1981;
        $libro7->autor_id = 3;
        $libro7->save();

        $libro8 = new Libro();
        $libro8->titulo = '1984';
        $libro8->año_publicacion = 1949;
        $libro8->autor_id = 4;
        $libro8->save();

        $libro9 = new Libro();
        $libro9->titulo = 'Rebelión en la granja';
        $libro9->año_publicacion = 1945;
        $libro9->autor_id = 4;
        $libro9->save();

        $libro10 = new Libro();
        $libro10->titulo = 'El código Da Vinci';
        $libro10->año_publicacion = 2003;
        $libro10->autor_id = 5;
        $libro10->save();
    }
}
