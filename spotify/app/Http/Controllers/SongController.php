<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function verCanciones(Request $request){
        // $songs = Song::with('playlist')->get();
        // return view('spotify.buscar',compact('songs'));


        $buscar = $request->input('buscar');

        if($buscar){
            $songs = Song::where('nombre','like', "%{$buscar}%")->with('playlist')->get();
        }else{
            $songs = Song::with('playlist')->get();
        }


        return view('spotify.buscar',compact('songs','buscar'));
    }
}
