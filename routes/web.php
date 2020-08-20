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
Auth::routes();

// HOME PRINCIPAL
Route::get('/', 'Home\HomeController@index')->name('welcome');

// PRODUTOS
Route::get('/loja','Cliente\ItensController@produtos')->name('produtos');
Route::get('/produto/{id}', 'Cliente\ItensController@show')->name('produtos.show');

// CARRINHO
Route::get('/produto/{id}/carrinho', 'Cliente\CompraProdutoController@show')->name('carrinho.show');

// CADASTRO CLIENTE
Route::get('carrinho/cadastro/cliente', 'Cliente\CadastroClientesController@index')->name('cadastro');

//LOGIN
Route::get('/login', 'Login\LoginController@index')->name('login');
Route::post('/', 'Login\LoginController@login')->name('login.conta');
Route::get('/login/sair', 'Login\LoginController@logout')->name('logout');

// MIDDLEWARE - ADMIN
Route::group(['middleware' => 'auth'], function (){
    Route::get('/admin', 'Admin\ProdutoController@index')->name('admin.index');
    Route::get('/admin/create', 'Admin\ProdutoController@create')->name('admin.create');
    Route::get('/admin/{id}/produto', 'Admin\ProdutoController@show')->name('admin.show');
    Route::get('/admin/{id}', 'Admin\ProdutoController@edit')->name('admin.edit');
    Route::put('/admin/{id}', 'Admin\ProdutoController@update')->name('admin.update');
    Route::post('/admin', 'Admin\ProdutoController@store')->name('admin.store');
    Route::delete('/admin/{id}', 'Admin\ProdutoController@destroy')->name('admin.destroy');
});
