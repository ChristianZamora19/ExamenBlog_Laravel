<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\BlogController;
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
//inicio
Route::get('/',[BlogController::class,'inicio'])->name('index');
//introduccion
Route::get('/about',[BlogController::class,'introduccion'])->name('about');
// unidad 1
Route::get('/marketing',[BlogController::class,'unidad1'])->name('marketing');
//unidad 2
Route::get('/blog',[BlogController::class,'unidad2'])->name('blog');
// contactar
Route::get('/contact',[BlogController::class,'contactar'])->name('contact');


// temas unidad 1
Route::get('/Arquitectura',[BlogController::class,'arquitectura'])->name('Arquitectura');

Route::get('/Cli_Ser',[BlogController::class,'clientesevidor'])->name('Cli_Ser');

Route::get('/Nube',[BlogController::class,'nube'])->name('Nube');

Route::get('/ProgMaestro',[BlogController::class,'maestro'])->name('ProgMaestro');

Route::get('/Servidores',[BlogController::class,'servidor'])->name('Servidores');

Route::get('/SI',[BlogController::class,'si'])->name('SI');


//temas unidad 2
Route::get('/Multinivel',[BlogController::class,'multinivel'])->name('Multinivel');

Route::get('/MVC',[BlogController::class,'mvc'])->name('MVC');

Route::get('/Sockets',[BlogController::class,'socket'])->name('Sockets');

Route::get('/U2_Estrategias',[BlogController::class,'estrategias'])->name('U2_Estrategias');