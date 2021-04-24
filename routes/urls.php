<?php

use Illuminate\Support\Facades\Route;


#this rout for Tags
Route::namespace('Tags')
    ->middleware('auth')
    ->prefix('admin')
    ->group(function () {

        Route::get('tags/', 'TagController@index')->name('tag.tags');
        Route::get('tag/create/', 'TagController@create')->name('tag.create');
        Route::post('tag/store/', 'TagController@store')->name('tag.store');
        Route::get('tag/delete/{id}', 'TagController@destroy')->name('tag.delete');
    });


#this rout for profile
Route::namespace('Profiles')
->middleware('auth')
->group(function () {
        Route::get('users/', 'UsersController@index')->name('user.users');
    });
