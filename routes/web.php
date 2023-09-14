<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;

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


// Route::get('/master', function () {
//     return view('layout.master');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "<h1>Hello laravel</h1>";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/forminput', [PagesController::class,'FormInput']);
Route::post('/welcome', [PagesController::class,'Welcome']);

Route::get('/datatable', function () {
    return view('datatable.index');
});

Route::get('/npm', 'NpmController@index');
Route::get('/npm/create', 'NpmController@create');
Route::post('/npm', 'NpmController@store');
Route::get('/npm/{id}/edit', 'NpmController@edit');
Route::put('/npm/{id}', 'NpmController@update');
Route::delete('/npm/{id}', 'NpmController@destroy');

