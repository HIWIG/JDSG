<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAuth\RegisterController;
use App\Http\Controllers\MyAuth\DashboardController;
use App\Http\Controllers\MyAuth\LoginController;


Route::get('/account', function () {
    return view('account');
})->name('account');

/*LEARNING SECTION*/

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::get('/logout',[\App\Http\Controllers\Auth\AuthenticatedSessionController::class,'destroy'])->name('logout');

Route::get('/', function () {
    return view('index');
})->name('index');

/*

Route::get('/login', function () {
    return view('loginRegister');
})->name('loginRegister');*/

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/


/*require __DIR__.'/auth.php';*/
