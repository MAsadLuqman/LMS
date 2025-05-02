<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginMatch(LoginRequest $request){
        $credentials = $request->validated();
            if(auth()->attempt($credentials)){
                $user = auth()->user();
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->back()->with('error', 'Invalid Credentials');
            }
    }
    public function register(){
        return view('auth.register');
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('login')->with('success', 'Logged Out Successfully');
    }
    public function forgot(){
        return view('auth.forgot');
    }
    public function reset(){
        return view('auth.reset');
    }
    public function verify(){
        return view('auth.verify');
    }
}
