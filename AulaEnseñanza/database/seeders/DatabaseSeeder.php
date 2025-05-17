<?php

namespace Database\Seeders;

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

        // // User::factory()->create([
        // //     'name' => 'Test User',
        // //     'email' => 'test@example.com',
        // ]);

        $this->call(AlumnoSeeder::class);
        $this->call(ProfesorSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(AlumnoCursoSeeder::class);
        $this->call(ProfesionSeeder::class);
    }
}
