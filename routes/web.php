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

Route::get('/', 'PagesController@getHome');
Route::get('/blog-detail', 'PagesController@getBlogDetail');
Route::get('/blog', 'PagesController@getBlog');
Route::get('/about', 'PagesController@getAbout');
Route::get('/cart', 'PagesController@getCart');
Route::get('/contact', 'PagesController@getContact');
Route::get('/product', 'PagesController@getProduct');
Route::get('/product-detail', 'PagesController@getProductDetail');
