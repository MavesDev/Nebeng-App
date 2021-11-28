<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PagesController@beranda');

Route::get('/login','PagesController@login');

Route::get('/settings','PagesController@settings');

//post

Route::post('/login','SystemController@loginSystem');
Route::post('/logout','SystemController@logoutSystem');
