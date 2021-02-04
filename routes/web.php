<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MyAuth\DashboardController;
//use app\Http\Controllers\MyAuth\LoginController;
//use app\Http\Controllers\MyAuth\RegisterController;



Route::get('/account', function () {
    return view('account');
})->name('account');

/*LEARNING SECTION*/

/*Route::get('/dashboard',[DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');*/

//Route::get('/register',[RegisterController::class, 'index'])->name('register');
//Route::post('/register',[RegisterController::class, 'store']);

//Route::get('/login',[LoginController::class, 'index'])->name('login');
//Route::post('/login',[LoginController::class, 'store']);

//Route::post('/logout',[\App\Http\Controllers\Auth\AuthenticatedSessionController::class,'destroy'])->name('logout');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth'])->name('dashboard');

/* damian sobie testuje here*/

Route::get('/category', function () {
    return view('category');
})->name('category');


/*ogłoszenie*/
Route::get('/advertisement', function () {
    return view('advertisement');
})->name('advertisement');

/*



Route::get('/login', function () {
    return view('loginRegister');
})->name('loginRegister');*/


require __DIR__.'/auth.php';
