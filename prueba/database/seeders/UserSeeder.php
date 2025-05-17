<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'avatar' => 'https://i.pravatar.cc/150?img=1',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password123'), // nunca guardes texto plano
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Normal User',
            'email' => 'user@example.com',
            'avatar' => 'https://i.pravatar.cc/150?img=2',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'user',
        ]);
    }
}
