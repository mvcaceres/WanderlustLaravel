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


Route::get('/agregarproducto', 'ProductoController@create')->name('agregarproducto');
// ->middleware('admin');
Route::post('/agregarproducto', 'ProductoController@store');


Route::get('/editarproducto/{id}', 'ProductoController@edit');
Route::post('/actualizarproducto/{id}', 'ProductoController@update');

Route::get('/borrarproducto/{id}','ProductoController@destroy');

// ------

Route::post('/agregaralcarrito', 'CarritoController@store')->middleware('auth');
//Route::get('/delete/{id}', 'CartController@destroy')->middleware('auth'); //Borramos productos del carrito.
Route::get('/borrardelcarrito/{id}', 'CarritoController@destroy')->middleware('auth');
//Route::get('/cart', 'CartController@index')->middleware('auth');
Route::get('/carrito', 'CarritoController@index')->middleware('auth');  //Mostramos el carrito abierto.
//Route::post('/cartclose', 'CartController@cartClose')->middleware('auth');
Route::post('/cerrarcarrito', 'CarritoController@cerrarcarrito')->middleware('auth');



Route::get('/historial', 'CarritoController@historial')->middleware('auth');