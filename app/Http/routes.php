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
    return view('welcome');
});

Route::get('/admin/', 'AdminController@index');
Route::post('/admin/login', 'AdminController@login');

Route::get('/pengguna/', 'PenggunaController@index');
Route::post('/pengguna/register', 'PenggunaController@register');

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/admin/home', 'HomeController@index');
