<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/login', 'Auth\LoginController@showLoginForm' );
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout');
// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/email', 'Auth\ResetPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index');

Route::get('/players', 'HomeController@index')->name('players.index');

Route::get('/player/kick/{id}', 'HomeController@kick')->name('action.kick');
Route::get('/player/ban/{id}', 'HomeController@ban')->name('action.ban');

Route::get('/profile', 'UsersController@profile')->name('profile.index');
Route::post('/profile', 'UsersController@updateProfile')->name('profile.save');

Route::get('/users', 'UsersController@index')->name('users.index');

Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
Route::post('/users/edit/{id}', 'UsersController@update')->name('users.updateUser');

Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::post('/users/create', 'UsersController@saveUser')->name('users.saveUser');

Route::get('/users/remove/{id}', 'UsersController@remove')->name('users.remove');
