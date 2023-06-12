<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginproses(Request $request){
        // dd($request->all());
        // dd(Auth::attempt($request->only('email','password')));
        
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
            // dd('login');
        }
            return redirect('/login');
            // dd('tidakbisalogin');
    }

    public function register(){
        return view('register');
    }

    public function registeruser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login');

    }
    
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}


// [NOTES] - penggunaan 'bcrypt' pada password login/register agar tidak dibobol saat web kecolongan
// 'bcrypt' itu enkripsi
// [NOTES] - menambahkan library Auth pada controller dan model
