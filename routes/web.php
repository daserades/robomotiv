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

Route::get('/urunler', ['as'=>'products', 'uses'=>'HomeCTRL@products']);
Route::get('/urunler/{category}', ['as'=>'products_category', 'uses'=>'HomeCTRL@products_category']);
Route::get('/urunler/{category}/{slug}', ['as'=>'product_detail', 'uses'=>'HomeCTRL@product_detail']);

Route::get('/hizmetler', ['as'=>'services', 'uses'=>'HomeCTRL@services']);
Route::get('/hizmetler/{slug}', ['as'=>'service_detail', 'uses'=>'HomeCTRL@service_detail']);

Route::get('/projeler', ['as'=>'projects', 'uses'=>'HomeCTRL@projects']);
Route::get('/project/{slug}', ['as'=>'project_detail', 'uses'=>'HomeCTRL@project_detail']);

Route::get('/bloglar', ['as'=>'blogs', 'uses'=>'HomeCTRL@blogs']);
Route::get('/bloglar/{category}', ['as'=>'blogs_category', 'uses'=>'HomeCTRL@blogs_category']);
Route::get('/bloglar/{category}/{slug}', ['as'=>'blog_detail', 'uses'=>'HomeCTRL@blog_detail']);

Route::get('/iletisim', ['as'=>'contact', 'uses'=>'HomeCTRL@contact']);


Route::post('/arama', ['as'=>'search', 'uses'=>'HomeCTRL@search']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
