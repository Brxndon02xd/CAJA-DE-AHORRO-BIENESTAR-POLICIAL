<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Paginacontroller;
use App\Http\Controllers\CategoriaController;


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



Route::get('/', [Paginacontroller::class, 'inicio']);
Route::get('/InfoCate', [CategoriaController::class, 'informacionCategoria']);
Route::get('/editar/{id}', [CategoriaController::class, 'editarCategoria']);