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
Route::get('/',[App\Http\Controllers\PortafolioController::class, 'index']);
//Route::get('/',  [App\Http\Controllers\PortafolioController::class, 'index']);

Auth::routes();

Route::resource('/rpyectos', App\Http\Controllers\RpyectoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
