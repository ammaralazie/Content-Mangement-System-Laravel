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

        //users
        Route::get('users/', 'UsersController@index')->name('user.users');
        Route::get('user/create/', 'UsersController@create')->name('user.create');
        Route::post('user/store/', 'UsersController@store')->name('user.store');
        Route::get('user/admin/{id}/{state}', 'UsersController@admin')->name('user.admin');

        //Settings
        Route::get('setting/index/', 'SettingsController@index')->name('setting.index');
        Route::post('setting/update/', 'SettingsController@edit')->name('setting.update');
    });
