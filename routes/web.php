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

Route::resource('/gallery', 'GalleryController');
Route::get('/gallery/coba', 'GalleryController');
Route::get('/gallery', 'GalleryController@index');
Route::get('/gallery/add', 'GalleryController@add');
Route::get('/gallery/update', 'GalleryController@update');

Route::get('/', function () {
    return view('welcome');
});

*/

Route::resource('/images', 'ImagesController');
Route::get('/images/show/{id}', 'ImagesController@show');

Route::get('/', function(){ return redirect('/image'); });
Route::resource('/image', 'ImageController');




