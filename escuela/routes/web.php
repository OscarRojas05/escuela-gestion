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

Route::get('/', 'App\Http\Controllers\WelcomeController@index');
Route::resource('grados',App\http\Controllers\GradosController::class );
Route::resource('materias',App\http\Controllers\MateriasController::class );
Route::resource('alumnos',App\http\Controllers\AlumnoController::class );
//Route::get('welcome',App\http\Controllers\IndexController::class );