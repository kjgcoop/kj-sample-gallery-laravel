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

// Show pictures
Route::get('/',           'KJGalleryController@index');
Route::get('/kj-gallery', 'KJGalleryController@index');
Route::get('/home',       'KJGalleryController@index');


// Upload new pictures
Route::get('/kj-upload-form',     ['middleware' => 'auth', 'uses' => 'KJFileUploadController@form']);
Route::post('/kj-upload-process', ['middleware' => 'auth', 'uses' => 'KJFileUploadController@process']);
