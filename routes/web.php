<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvi;

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
Route::get('formulario',[controladorvi::class,'verformulario'])->name('form');
Route::get('tabla',[controladorvi::class,'vertabla'])->name('tab');
Route::post('Guardarusuario', [controladorvi::class,'procesarusuario'])->name('prousu');

Route::get('/', function () {
    return view('welcome');
});
