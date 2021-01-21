<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAuth\RegisterController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/account', function () {
    return view('account');
})->name('account');

/*LEARNING SECTION*/
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

/*
Route::get('/login', function () {
    return view('loginRegister');
})->name('loginRegister');*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/*require __DIR__.'/auth.php';*/
