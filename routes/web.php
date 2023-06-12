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


//rotas de categorias
Route::get('/categorias', [ControladorCategoria::class, 'index']);

Route::post('/categorias', [ControladorCategoria::class, 'store']);

Route::get('/categorias/novo', [ControladorCategoria::class, 'create']);

Route::get('/categorias/apagar/{id}', [ControladorCategoria::class, 'destroy']);

Route::get('/categorias/editar/{id}', [ControladorCategoria::class, 'edit']);

Route::post('/categorias/{id}', [ControladorCategoria::class, 'update']);

//rotas de produtos
Route::get('/produtos', [ControladorProduto::class, 'index']);

Route::get('/produtos/novo', [ControladorProduto::class, 'create']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
