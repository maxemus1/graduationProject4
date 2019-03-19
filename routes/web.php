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
//Route::get('/','UserController@delete');

//Route::get('/register','UserController@register');
//Route::get('/delete','UserController@delete');
//Route::get('/update','UserController@update');

Auth::routes();

Route::get('/products', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create');
Route::post('/products/store', 'ProductsController@store');
