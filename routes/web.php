<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Articulo;
use App\Http\Controllers\Marca;
use App\Http\Controllers\Tienda;
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
    return view ('tiendas.texto');
});

Route::get('/Delgado/articulo', [Articulo::class, 'listado_articulos'] );
Route::get('/Delgado/marca',[Marca::class, 'listado_marcas']);
Route::get('/Delgado/presentacion',[Tienda::class, 'tienda']);


