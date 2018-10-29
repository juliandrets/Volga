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


Route::get('/', 'HomeController@index');
Route::get('/index', 'HomeController@index');
//Route::get('/beta', 'HomeController@index');
Route::get('/contact', 'HomeController@contacto');
Route::resource('/reel', 'ReelController');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/gallery/{id}', 'HomeController@viewGallery');
Route::get('/about', 'HomeController@about');
Route::get('/about/cv', 'HomeController@cv');
Route::get('/about/values', 'HomeController@values');
Route::get('/about/facts', 'HomeController@facts');
Route::get('/about/certificates', 'HomeController@certificates');

// email
Route::post('/send', 'HomeController@send');

// admin
Route::get('/admin', 'AdminController@index');
Route::get('/admin/reel/create', 'ReelController@create');
Route::resource('/admin/reel', 'ReelController');
Route::get('admin/reel/{id}/delete', 'ReelController@destroy');
Route::get('admin/reel/{id}/edit', 'ReelController@edit');
Route::post('admin/reel/{id}/update', 'ReelController@update');
Route::post('admin/gallery/create', 'ReelController@craete');

// admin gallery
//Route::get('/admin/gallery', 'GalleryController@index');
Route::resource('/admin/gallery', 'GalleryController');
Route::get('/admin/gallery/{id}/view', 'GalleryController@viewGallery');

//admin photos
Route::resource('/admin/photos', 'PhotoController');
Route::get('/admin/photos/create/{id}', 'PhotoController@create');
Route::get('/admin/photos/{id}/delete', 'PhotoController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
