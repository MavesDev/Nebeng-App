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


Route::get('/', function () {
    return view('layout.main2');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/setting', function () {
    return view('Setting');
});

Route::get('/data', function () {
    return view('content.Data');
});

Route::get('/data_user', function () {
    return view('content.DataUser');
});


Route::get('/history', function () {
    return view('content.History');
});
