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

Route::get('/', ['as'=>'index', 'uses'=>'HomeCTRL@index']);
Route::get('/kurumsal',['as'=>'corporate', 'uses'=>'HomeCTRL@corporate']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
