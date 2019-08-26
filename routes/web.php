<?php

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/modale', function () {
    return view('auth.registro');
});
Route::get('/rec', function () {
    return view('auth.recuperar');
});

Route::get('/ini', function () {
    return view('home.inicio');
});

Route::get('/maq', function () {
    return view('productos.maquinaria');
});
Route::get('/her', function () {
    return view('productos.herramientas');
});

Route::get('/ele', function () {
    return view('productos.proelec');
});

Route::get('/com', function () {
    return view('compras.compras');
});




