<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAuth\RegisterController;
use App\Http\Controllers\MyAuth\DashboardController;
use App\Http\Controllers\MyAuth\LoginController;
use Symfony\Component\Console\Input\Input;
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

/*Route::get('/', function () {
    return view('index');
})->name('index');*/

Route::get('/', [ProductController::class,'mainlisting'])->name('index');

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth'])->name('dashboard');

Route::any('/category',[ProductController::class, 'search'])->name('category');


/*ogłoszenie*/
Route::get('/advertisement', function () {
    return view('advertisement');
})->name('advertisement');
/*FAQ*/
Route::get('/faq',function ()
{
 return view('faq');
})->name('faq');

Route::get('/contact',function ()
{
    return view('contact');
})->name('contact');


Route::get('/addproduct',[ProductController::class,'add'])->name('addproduct');
Route::post('/addproduct',[ProductController::class,'store']);

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


require __DIR__.'/auth.php';
