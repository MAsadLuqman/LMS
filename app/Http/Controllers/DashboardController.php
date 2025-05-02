<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function AuthUser(){
        $user = auth()->user();
        return view('dashboard', compact('user'));
    }
}
