<?php

namespace Database\Seeders;

use App\Models\Podcast;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PodcastUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $podcasts= Podcast::all();

        foreach($users as $user){
            $user->podcast()->attach(
                $podcasts->random(rand(1,5))->pluck('id')->toArray()
            );
        }
    }
}
