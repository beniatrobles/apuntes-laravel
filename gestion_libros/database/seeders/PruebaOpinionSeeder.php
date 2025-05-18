<?php

namespace Database\Seeders;

use App\Models\Opinion;
use App\Models\Prueba;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PruebaOpinionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los registros de opiniones
        $opinions = Opinion::all();

        // Obtener todos los registros de pruebas
        $pruebas = Prueba::all();

        // Iterar sobre cada opinión
        foreach ($opinions as $opinion) {
            // Seleccionar entre 1 y 3 pruebas aleatorias para esta opinión
            // pluck('id') extrae sólo los IDs de las pruebas seleccionadas
            // toArray() convierte la colección en un array simple de IDs
            $randomPruebas = $pruebas->random(rand(1, 3))->pluck('id')->toArray();

            // Asociar las pruebas seleccionadas a la opinión en la tabla intermedia
            // syncWithoutDetaching agrega las nuevas relaciones sin eliminar las existentes
            $opinion->pruebas()->syncWithoutDetaching($randomPruebas);
        }
    }
}
