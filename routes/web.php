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

Route::get('/', 'BandsController');


Route::get('edit/{band_id}/', 'BandsController@edit');
Route::post('edit/{band_id}', 'BandsController@save');
Route::get('delete/{band_id}/', 'BandsController@delete');

Route::get('albums/', 'AlbumsController');
Route::get('albums', 'AlbumsController');

Route::get('albums/{band_id}', 'AlbumsController@by');
Route::get('albums/delete/{album_id}', 'AlbumsController@delete');
Route::get('albums/edit/{album_id}', 'AlbumsController@edit');
Route::post('albums/edit/{album_id}', 'AlbumsController@save');