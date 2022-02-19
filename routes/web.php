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

Route::get('/','PagesController@beranda')->middleware('auth');

Route::get('/login','PagesController@login')->middleware('guest')->name('login');

Route::get('/settings','PagesController@settings')->middleware('auth');
Route::get('/rekap', 'PagesController@rekap')->middleware('auth');
Route::post('/rekap','SystemController@searchrekap')->middleware('auth');
// Route::post('/rekap/filter','SystemController@filterrekap')->middleware('auth');
Route::get('/filterRekap','SystemController@filterRekap')->middleware('auth');
Route::get('/data_user', 'PagesController@data_user')->middleware('auth');
// Route::get('/feedback', 'PagesController@feedback');
Route::get('/history', 'PagesController@history')->middleware('auth');
Route::get('/history/{id}', 'PagesController@detailhistory')->middleware('auth');


Route::get('/keloladata/detail', 'PagesController@detail')->middleware('auth');
Route::get('/keloladata','PagesController@kelolaData')->middleware('auth');
Route::get('/keloladata/detail/{id}','PagesController@detail')->middleware('auth');
Route::post('/keloladata/edit/{id}','SystemController@edituser')->middleware('auth');
Route::get('/keloladata/hapus/{id}','SystemController@hapususer')->middleware('auth');
Route::post('/keloladata/tambah','SystemController@tambahuser')->middleware('auth');
Route::post('/keloladata','SystemController@searchuser')->middleware('auth');
Route::post('/tambahuser','SystemController@tambahuser')->middleware('auth');
Route::get('/searchuser','SystemController@searchuser')->middleware('auth');
Route::get('/orderuser','SystemController@orderuser')->middleware('auth');

//post

Route::post('/login','SystemController@loginSystem')->middleware('guest');
Route::post('/logout','SystemController@logoutSystem')->middleware('auth');
Route::post('/settings','SystemController@settingsSystem')->middleware('auth');
