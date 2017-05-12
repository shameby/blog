<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index/index');
});

//用户注册登录
Route::get('/signup', function () {
    return view('user/signup');
})->name('signup');

Route::get('/login', function () {
    return view('user/login');
})->name('loginPage');

Route::post('/users', 'UsersController@store')->name('users.store');
Route::get('/users/{id}', 'UsersController@show')->name('users.show');

Route::post('/login', 'SessionsController@store')->name('login');
Route::delete('/logout', 'SessionsController@destroy')->name('logout');