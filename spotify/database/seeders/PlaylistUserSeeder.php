<?php

namespace Database\Seeders;

use App\Models\Playlist;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaylistUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $playlists= Playlist::all();

        foreach($users as $user){
            $user->playlist()->attach(
                $playlists->random(rand(1,3))->pluck('id')->toArray()
            );
        }
    }
}
