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
    return view('welcome');
});

Route::get('estudantemodelo', function () {
    return view('modelEstudante');
});

Route::get('estudante', 'estudanteControlo@index');

Route::get('paginaprincipal', 'estudanteControlo@create');
//Route::get('paginaprincipal', function () {
  //  return view('paginaprincipal');
//});


// Route::get('paginaprincipal', function () {
//    return view('paginaprincipal');
 //});

 Route::post('registarEstudante','estudanteControlo@store');
