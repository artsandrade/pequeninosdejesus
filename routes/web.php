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

Route::get('/prestacao-de-contas/post', function () {
    return view('site/prestacao-de-contas-post');
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

Route::get('/painel/galeria/inserir', function () {
    return view('painel/galeria/inserir');
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

Route::get('/painel/noticias/inserir', function () {
    return view('painel/noticias/inserir');
});

Route::get('/painel/noticias/visualizar', function () {
    return view('painel/noticias/visualizar');
});

Route::get('/painel/noticias/alterar', function () {
    return view('painel/noticias/alterar');
});

Route::get('/painel/atendimentos', function () {
    return view('painel/atendimentos/visualizar');
});

Route::get('/painel/prestacao-de-contas/inserir', function () {
    return view('painel/prestacao-de-contas/inserir');
});

Route::get('/painel/prestacao-de-contas', function () {
    return view('painel/prestacao-de-contas/prestacao-de-contas');
});

Route::get('/painel/prestacao-de-contas/visualizar', function () {
    return view('painel/prestacao-de-contas/visualizar');
});

Route::get('/painel/prestacao-de-contas/alterar', function () {
    return view('painel/prestacao-de-contas/alterar');
});

Route::get('/painel/usuarios/inserir', function () {
    return view('painel/usuarios/inserir');
});

Route::get('/painel/usuarios', function () {
    return view('painel/usuarios/usuarios');
});

Route::get('/painel/usuarios/visualizar', function () {
    return view('painel/usuarios/visualizar');
});

Route::get('/painel/usuarios/alterar', function () {
    return view('painel/usuarios/alterar');
});

Route::get('/painel/meu-perfil', function () {
    return view('painel/perfil/perfil');
});

Route::get('/login', function () {
    return view('painel/login/login');
});

Route::get('/esqueci-minha-senha', function () {
    return view('painel/login/esqueci-minha-senha');
});