<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index');
Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create');
Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store');
Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show');
Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy');
*/

Route::resource('pizzas', 'App\Http\Controllers\PizzaController');

Auth::routes([]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');