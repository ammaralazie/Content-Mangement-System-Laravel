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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//route for post
Route::prefix('admin')->group(function () {
    Route::get('/posts/create', 'PostsController@create')->name('create');
    Route::post('/posts/store', 'PostsController@store')->name('store');
    Route::get('/posts', 'PostsController@index')->name('post.index');
});

//route for category
Route::middleware('auth')->prefix('user')->group(function () {
    Route::get('/category/create', 'CategorysController@create')->name('category.create');
    Route::get('/categories', 'CategorysController@index')->name('category.index');
    Route::get('/category/edit/{id}', 'CategorysController@edit')->name('category.edit');
    Route::post('/category/update/{id}', 'CategorysController@update')->name('category.update');
    Route::get('/category/delete/{id}', 'CategorysController@destroy')->name('category.delete');
    Route::post('/category/store', 'CategorysController@store')->name('category.store');
});
