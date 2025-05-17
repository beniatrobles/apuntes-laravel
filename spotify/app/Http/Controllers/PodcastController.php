<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PodcastController extends Controller
{
    public function indexPodcast()
    {
        $podcasts = Podcast::all();
        $favoritos = [];

        if (Auth::check()) {
            $favoritos = Auth::user()->podcast->pluck('id')->toArray();
        }

        return view('spotify.podcast', compact('podcasts', 'favoritos'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/podcast');
        }

        return back()->withErrors([
            'email' => 'Credenciales incorrectas',
        ])->onlyInput('email');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/podcast');
    }
}
