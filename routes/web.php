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

Route::get('/galeria/post', function () {
    return view('site/galeria-post');
});

Route::get('/prestacao-de-contas', function () {
    return view('site/prestacao-de-contas');
});
Route::get('/colaboradores', function () {
    return view('site/colaboradores');
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

Route::get('/painel', function () {
    return view('painel/inicio/inicio');
});

Route::get('/painel/galeria', function () {
    return view('painel/galeria/galeria');
});

Route::get('/painel/galeria/incluir', function () {
    return view('painel/galeria/incluir');
});

Route::get('/painel/galeria/visualizar', function () {
    return view('painel/galeria/visualizar');
});

Route::get('/painel/galeria/alterar', function () {
    return view('painel/galeria/alterar');
});

Route::get('/painel/noticias', function () {
    return view('painel/noticias/noticias');
});

Route::get('/painel/noticias/incluir', function () {
    return view('painel/noticias/incluir');
});

Route::get('/painel/noticias/visualizar', function () {
    return view('painel/noticias/visualizar');
});

Route::get('/painel/noticias/alterar', function () {
    return view('painel/noticias/alterar');
});