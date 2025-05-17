<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Jone';
        $user->lastname = 'Martinez';
        $user->email = 'jone.m@fptxurdinaga.com';
        $user->password = 'jone123';

        $user->save();

        $user = new User();
        $user->name = 'Laura';
        $user->lastname = 'Folgado';
        $user->email = 'laura.f@fptxurdinaga.com';
        $user->password = 'laura123';

        $user->save();

        $user = new User();
        $user->name = 'Iker';
        $user->lastname = 'Landajuela';
        $user->email = 'iker@gmail.com';
        $user->password = 'iker123';

        $user->save();

    }
}
