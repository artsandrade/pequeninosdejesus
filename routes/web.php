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

Route::get('/', function () {
    return view('site/inicio');
});

Route::get('/fale-conosco', function () {
    return view('site/fale-conosco');
});

Route::get('/galeria', function () {
    return view('site/galeria');
});
Route::get('/prestacao-de-contas', function () {
    return view('site/prestacao-de-contas');
});
Route::get('/professores', function () {
    return view('site/professores');
});
Route::get('/sobre-nos', function () {
    return view('site/sobre-nos');
});

Route::get('/noticias', function () {
    return view('site/noticias');
});

Route::get('/noticias/post', function () {
    return view('site/noticias-post');
});