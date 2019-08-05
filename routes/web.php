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
Route::post('/agregarproducto', 'ProductoController@store')->middleware('admin');


Route::get('/editarproducto/{id}', 'ProductoController@edit');
Route::post('/actualizarproducto/{id}', 'ProductoController@update');

Route::get('/borrarproducto/{id}','ProductoController@destroy');

Route::post('/agregaralcarrito', 'CarritoController@store')->middleware('auth');
Route::get('/borrardelcarrito/{id}', 'CarritoController@destroy')->middleware('auth');
Route::get('/carrito', 'CarritoController@index')->middleware('auth');  //Mostramos el carrito abierto.
Route::post('/cerrarcarrito', 'CarritoController@cerrarcarrito')->middleware('auth');



Route::get('/historial', 'CarritoController@historial')->middleware('auth');

Route::get('/usuarios', 'UserController@index');

Route::get('/miperfil/{id}', 'UserController@show');
Route::get('/editarmiperfil/{id}', 'UserController@edit');
Route::post('/actualizarmiperfil/{id}', 'UserController@update');

Route::get('/faqs','FaqsController@index');
