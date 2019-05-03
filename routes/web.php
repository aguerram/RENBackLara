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

use Illuminate\Support\Facades\Route;

Route::get('/', 'Admin\HomeController@index')->name('home');


Route::get('/login', 'Admin\AuthController@index')->name('login');
Route::post('/logout', 'Admin\AuthController@logout')->name('logout');
Route::post('/login', 'Admin\AuthController@login');
Route::get('/register', 'Admin\AuthController@register')->name('register');

Route::resource('/game','Admin\GameController');
