<?php

use App\Http\Controllers\GameController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('index');
Route::get('/home/games', 'App\Http\Controllers\GameController@getIndex')->name('games.index');

Route::get('/home/games/show/{id}', 'App\Http\Controllers\GameController@getShow')->name('games.show');

Route::get('/home/games/crear' , [GameController::class,'getCreate'])->name('games.create');
Route::post('/home/games' , [GameController::class,'store'])->name('games.store');

Route::get('/home/games/editar/{id}' , [\App\Http\Controllers\GameController::class,'editar'])->name('games.edit');
Route::patch('/home/{juego}' , [\App\Http\Controllers\GameController::class,'update'])->name('games.update');

Route::delete('/home/games/{juego}', 'App\Http\Controllers\GameController@destroy')->name('games.destroy');

Route::get('auth/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('auth/logout', function () {
    return "Logout";
})->name('auth.logout');

