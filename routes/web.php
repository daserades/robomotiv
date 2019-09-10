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


Route::get('/bloglar', ['as'=>'blogs', 'uses'=>'HomeCTRL@blogs']);
Route::get('/bloglar/{category}', ['as'=>'blogs_category', 'uses'=>'HomeCTRL@blogs_category']);
Route::get('/bloglar/{category}/{slug}', ['as'=>'blog_detail', 'uses'=>'HomeCTRL@blog_detail']);

Route::get('/iletisim', ['as'=>'contact', 'uses'=>'HomeCTRL@contact']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
