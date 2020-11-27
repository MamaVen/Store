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
    return view('welcome');
});

Route::get('/', 'TemplatesController@index');

Route::get('/products', 'ProductsController@index');


Route::get('/stores','storesController@index');
Route::get('/stores/{store}','storesController@show');


//Transaction
Route::get('/transaction', 'TransactionsController@index');
Route::get('/transaction/create', 'TransactionsController@create');
Route::get('/transaction/{user}', 'TransactionsController@show');
Route::post('/transaction', 'TransactionsController@store');
Route::get('/transaction/{user}/edit', 'TransactionsController@edit');
Route::put('/transaction/{user}', 'TransactionsController@update');
Route::get('/transaction/{user}/delete','TransactionsController@delete');