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


Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id','[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona','ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function(){
    Route::resource('meu-controlador', 'MeuControladorController');
});
