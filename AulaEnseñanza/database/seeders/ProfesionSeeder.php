<?php

namespace Database\Seeders;

use App\Models\Profesion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {
            $profesion = new Profesion();
            $profesion->nombre = 'Profesor de Matemáticas';
            $profesion->save();

            $profesion = new Profesion();
            $profesion->nombre = 'Profesor de Lengua';
            $profesion->save();

            $profesion = new Profesion();
            $profesion->nombre = 'Profesor de Ciencias';
            $profesion->save();

            $profesion = new Profesion();
            $profesion->nombre = 'Profesor de Historia';
            $profesion->save();

            $profesion = new Profesion();
            $profesion->nombre = 'Profesor de Geografía';
            $profesion->save();

            $profesion = new Profesion();
            $profesion->nombre = 'Profesor de Educación Física';
            $profesion->save();

            $profesion = new Profesion();
            $profesion->nombre = 'Profesor de Música';
            $profesion->save();

            $profesion = new Profesion();
            $profesion->nombre = 'Profesor de Arte';
            $profesion->save();

            $profesion = new Profesion();
            $profesion->nombre = 'Profesor de Tecnología';
            $profesion->save();

            $profesion = new Profesion();
            $profesion->nombre = 'Profesor de Inglés';
            $profesion->save();
        }
    }
}
