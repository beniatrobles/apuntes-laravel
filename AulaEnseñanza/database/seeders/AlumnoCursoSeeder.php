<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumnos=Alumno::all();
        $cursos = Curso::all();

        foreach ($alumnos as $alumno){
            $alumno->cursos()->attach(
                $cursos->random(rand(1,3))->pluck('id')->toArray()
            );
        }
    }
}
