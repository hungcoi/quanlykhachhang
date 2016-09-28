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

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return redirect()->to('/login');
    });

    Route::get('/', 'HomeController@index');
});

Route::group([
    'prefix'     => 'admin',
    'middleware' => 'admin',
    'namespace'  => 'Admin'
], function () {
    Route::resource('/users', 'UserController');
});
