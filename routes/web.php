<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAuth\RegisterController;
use App\Http\Controllers\MyAuth\DashboardController;
use App\Http\Controllers\MyAuth\LoginController;
use Symfony\Component\Console\Input\Input;


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

Route::get('/category',[ProductController::class, 'search']);
/* damian sobie testuje here*/
/*
Route::get('/category', function () {
    return view('category');
})->name('category');

*/
/*

Route::any ( '/category', function () {
    $q = Input::get ( 'q' );
    if($q != ""){
        $ad = adverts::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
        $pagination = $ad->appends ( array (
            'q' => Input::get ( 'q' )
        ) );
        if (count ( $ad ) > 0)
            return view ( 'welcome' )->withDetails ( $ad )->withQuery ( $q );
    }
    return view ( 'category' )->withMessage ( 'No Details found. Try to search again !' );
} );
 */
/*

Route::get('/login', function () {
    return view('loginRegister');
})->name('loginRegister');*/

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/


/*require __DIR__.'/auth.php';*/
