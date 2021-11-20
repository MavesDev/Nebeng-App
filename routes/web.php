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

Route::get('/data', function () {
    return view('content.Data');
});

Route::get('/data_user', function () {
    return view('content.DataUser');
});

Route::get('/voucher', function () {
    return view('content.Voucher');
});

Route::get('/history', function () {
    return view('content.History');
});

Route::get('/feedback', function () {
    return view('content.Feedback');
});

Route::get('/rekap', function () {
    return view('content.Rekap');
});
