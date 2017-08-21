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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('principal');
});

Route::get('/cuidados', function () {
    return view('cuidados');
});

Route::get('/fraldas', function () {
    return view('fraldas');
});

Route::get('/cuidadosG', function () {
    return view('cuidadosG');
});

Route::get('/cuidadosM', function () {
    return view('cuidadosM');
});

Route::get('/duvidas', function () {
    return view('duvidas');
});

Route::resource('/users', 'UsersController');

Route::resource('/bebes', 'BebesController');

Route::resource('/consultas', 'ConsultasController');

Route::resource('/gravidez', 'GravidezController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contato', 'ContatoController@index');


Route::get('/gravidez/calculo', 'GravidezController@calculo');
