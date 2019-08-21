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
Route::get('/kj-gallery','KJGalleryController@index');

// Upload new pictures
Route::get('/kj-upload-form', ['middleware' => 'auth', 'uses' => 'KJFileUploadController@form']);
Route::post('/kj-upload-process', ['middleware' => 'auth', 'uses' => 'KJFileUploadController@process']);

// Laravel auth pages
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home'); // @todo should this be behid a login form?
