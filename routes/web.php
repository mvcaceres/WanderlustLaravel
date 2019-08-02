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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/productos', 'ProductoController@index');
Route::get('/producto/{id}', 'ProductoController@show');

Route::get('/categoria/{id?}', 'ProductoController@index');


Route::get('/agregarproducto', 'ProductoController@create')->middleware('admin');
Route::post('/agregarproducto', 'ProductoController@store');
Route::get('/editarproducto/{id}', 'ProductoController@edit');
Route::post('/editarproducto/{id}', 'ProductoController@update');
