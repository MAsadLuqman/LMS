<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::post('/loginMatch', 'loginMatch')->name('loginMatch');
    Route::get('/logout', 'logout')->name('logout');
});


Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [DashboardController::class,'AuthUser'])->name('dashboard');
});

