<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Autor::factory(5)->create();

        $this->call(LibroSeeder::class);
        $this->call(OpinionSeeder::class);
        $this->call(PruebaSeeder::class);
        $this->call(PruebaOpinionSeeder::class);
    }
}
