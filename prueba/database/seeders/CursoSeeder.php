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
        $curso->name = 'Curso Laravel';
        $curso->description = 'Aprender Laravel desde 0.';
        $curso->save();

        $curso = new Curso();
        $curso->name = 'Curso VUE';
        $curso->description = 'Aprender VUE desde 0.';
        $curso->save();

        $curso = new Curso();
        $curso->name = 'Curso Tailwind';
        $curso->description = 'Aprender tailwind desde 0.';
        $curso->save();

        $curso = new Curso();
        $curso->name = 'Curso Docker';
        $curso->description = 'Aprender Docker desde 0.';
        $curso->save();
    }
}
