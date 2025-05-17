<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();
        $curso->nombre = 'Fundamentos Java';
        $curso->nivel = 'Intermedio';
        $curso->horasAcademicas = '30';
        $curso->profesor_id = 1;
        $curso->foto = 'fotosCursos/c1.jpg';  // Foto del curso
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Programación en Python';
        $curso->nivel = 'Básico';
        $curso->horasAcademicas = '25';
        $curso->profesor_id = 2;
        $curso->foto = 'fotosCursos/c2.jpg';  // Foto del curso
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Desarrollo Web con HTML, CSS y JavaScript';
        $curso->nivel = 'Intermedio';
        $curso->horasAcademicas = '40';
        $curso->profesor_id = 3;
        $curso->foto = 'fotosCursos/c3.jpg';  // Foto del curso
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Programación Orientada a Objetos';
        $curso->nivel = 'Avanzado';
        $curso->horasAcademicas = '35';
        $curso->profesor_id = 4;
        $curso->foto = 'fotosCursos/c4.jpg';  // Foto del curso
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Bases de Datos con MySQL';
        $curso->nivel = 'Intermedio';
        $curso->horasAcademicas = '30';
        $curso->profesor_id = 5;
        $curso->foto = 'fotosCursos/c5.jpg';  // Foto del curso
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Introducción a la Programación';
        $curso->nivel = 'Básico';
        $curso->horasAcademicas = '20';
        $curso->profesor_id = 1;
        $curso->foto = 'fotosCursos/c6.jpg';  // Foto del curso
        $curso->save();
    }
}
