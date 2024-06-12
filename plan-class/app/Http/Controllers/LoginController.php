<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        
        return view('login');

    }

    public function auth(Request $request){

        $login = $request->validate([
            'email' => ['required','email'],
            'password'=>['required']
        ]);

        if(Auth::attempt($login)){

            $request->session()->regenerate();

            return redirect()->intended('biblioteca');
        }
        else{

            return view('login')->with('massage','Email ou senha incorretos');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return route('index');
        
    }
}
