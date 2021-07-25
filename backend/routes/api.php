<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    echo 'aa';
    return $request->user();
});


// webガードを適用し、apiガードの2つをコメントアウトするとユーザー情報が取得できる。
// または、apiガードにwebガードの上の4つを追加するとユーザー情報が取得できる。
// ->middleware('web')を適応するのではダメなのはなぜ？
Route::get('/test', function (Request $request) {
    echo 'welcomeapiaa';
    echo auth()->user();
    // echo Auth::guard('web')->user();
    echo "<br>";
    echo json_encode($request->cookie());
    echo "<br>";
    echo json_encode(session()->all());
    return view('welcome');
});

Route::middleware('auth:api')->post('/post', 'App\Http\Controllers\PostController@store');

// Route::post('/post', 'App\Http\Controllers\PostController@store');
