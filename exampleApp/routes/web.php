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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/simulasi', function () {
    return view('simulasi');
});
*/


Route::get('/', 'App\Http\Controllers\PagesController@welcome');
Route::get('/home', 'App\Http\Controllers\PagesController@home');
Route::get('/simulasi', 'App\Http\Controllers\PagesController@simulasi');


//stock
Route::get('/stocks', 'App\Http\Controllers\StocksController@index');
Route::get('/stocks/index', 'App\Http\Controllers\StocksController@index');
Route::get('/stocks/create', 'App\Http\Controllers\StocksController@create');
Route::get('/stocks/{stock}', 'App\Http\Controllers\StocksController@show');
Route::post('/stocks', 'App\Http\Controllers\StocksController@store');
Route::delete('/stocks/{stock}', 'App\Http\Controllers\StocksController@destroy');
Route::get('/stocks/{stock}/edit', 'App\Http\Controllers\StocksController@edit');
Route::patch('/stocks/{stock}', 'App\Http\Controllers\StocksController@update');


//R1
Route::get('/r1', 'App\Http\Controllers\r1datasController@index');
Route::get('/r1/index', 'App\Http\Controllers\r1datasController@index');