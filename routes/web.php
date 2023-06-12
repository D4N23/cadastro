<?php

use  App\Http\Controllers\ControladorCategoria;
use  App\Http\Controllers\ControladorProduto;

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
    return view('index');
});

Route::get('/produtos', [ControladorProduto::class, 'index']);

Route::get('/categorias', [ControladorCategoria::class, 'index']);

Route::get('/categorias/novo', [ControladorCategoria::class, 'create']);

Route::post('/categorias', [ControladorCategoria::class, 'store']);
