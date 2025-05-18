<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PruebaSeeder extends Seeder
{
    public function run(): void
    {
        $nombres = ['Carlos', 'Lucía', 'Ana', 'Pedro', 'María'];

        foreach (range(1, 5) as $i) {
            DB::table('pruebas')->insert([
                'nombre' => $nombres[$i - 1],
                'foto' => "a{$i}.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}