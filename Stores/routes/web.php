<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/branch','BranchController@index');
Route::get('/branch/create','BranchController@create');
Route::get('/branch/{branch}','BranchController@show');
Route::post('/branch', 'BranchController@store');
Route::get('/branch/{branch}/edit', 'BranchController@edit');
Route::put('/branch/{branch}', 'BranchController@update');
Route::get('/branch/{branch}/delete', 'BranchController@delete');


