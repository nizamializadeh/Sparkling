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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart', 'AbcController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'frontend\PostController@index');
Route::get('/post/single/{id}', 'frontend\PostController@single');

Route::get('/admin', 'admin\PostController@index');

Route::get('/Postindex', 'admin\PostController@post');
Route::get('/PostCreat', 'admin\PostController@creat');
Route::post('poststore','Admin\PostController@savePost');
Route::get('/post/edit/{id}', 'admin\PostController@edit');
Route::post('/post/update/{id}', 'admin\PostController@update');
Route::get('/post/delete/{id}', 'admin\PostController@delete');

Route::resource('tag','admin\TagController');

Auth::routes();


