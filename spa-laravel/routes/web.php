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

Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
Route::post('/image/store', 'SinglePageController@store');

Route::get('/test-axios', 'SinglePageController@testAxios');

Route::resource('products', 'ProductController');