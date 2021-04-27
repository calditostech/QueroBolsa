<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

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
    return view('home');
});

/* Rota Firebase */
Route::get('/firebase', [FirebaseController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rotas cadastros */

Route::get('/cadastros/lojas', function () {
    return view('cadastros.lojas');
});

Route::get('/cadastros/categorias', function () {
    return view('cadastros.categorias');
});

Route::get('/cadastros/cidades', function () {
    return view('cadastros.cidades');
});

Route::get('/cadastros/produtos', function () {
    return view('cadastros.produtos');
});

/* Rotas gerenciamento */
Route::get('/gerenciamento/lojas', function () {
    return view('gerenciamento.lojas');
});

Route::get('/gerenciamento/categorias', function () {
    return view('gerenciamento.categorias');
});

Route::get('/gerenciamento/cidades', function () {
    return view('gerenciamento.cidades');
});

Route::get('/gerenciamento/produtos', function () {
    return view('gerenciamento.produtos');
});

Route::get('/gerenciamento/usuarios', function () {
    return view('gerenciamento.usuarios');
});

/* Rotas financeiro */
Route::get('/financeiro/cidades', function () {
    return view('financeiro.cidades');
});

Route::get('/financeiro/lojas', function () {
    return view('financeiro.lojas');
});

/* Rotas marketing */
Route::get('/marketing/pushs', function () {
    return view('marketing.pushs');
});

