<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Credenciales inválidas.',
        ])->onlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
