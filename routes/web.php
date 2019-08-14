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


Auth::routes();

Route::get('/kj-gallery', ['middleware' => 'auth', 'uses' => 'KJGalleryController@index']);
//Route::get('/kj-gallery', 'KJGalleryController@index');
//Route::get('/', 'KJGalleryController@index');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
