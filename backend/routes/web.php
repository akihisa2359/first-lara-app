<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo 'welcome';
    echo auth()->user();
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/post', [App\Http\Controllers\PostController::class, 'store']);

// Route::get('/create', [App\Http\Controllers\HomeController::class, 'create']);

// Route::get('/post', [App\Http\Controllers\PostController::class, 'index']);
// Route::post('/post', [App\Http\Controllers\PostController::class, 'store']);
// Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create']);
// Route::post('/post', 'App\Http\Controllers\PostController@store');

Route::get('/{catch?}', function () { 
    return view('app'); 
})->where('catch', '^(?!api).*$');