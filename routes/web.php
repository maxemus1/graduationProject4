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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/products/{products}', 'ProductsController@show')->name('products.single');
Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/{id}', 'NewsController@show')->name('news.show');
Route::get('/categories/{id}', 'CategoriesController@show')->name('categories.show');
Route::post('/search', 'ProductsController@search')->name('products.search');
Route::get('/about_company', 'HomeController@aboutСompany')->name('about_company');

Route::group(['middleware' => ['auth:api']], function () {

    Route::get('/cart', 'CartController@step')->name('cart.step');
    Route::get('/cart/add/{products}', 'CartController@addToCart')->name('cart.addToCart');
    Route::get('/cart/destroy/{id}', 'CartController@destroy')->name('cart.destroy');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/mail', 'CartController@email')->name('mail');

});

