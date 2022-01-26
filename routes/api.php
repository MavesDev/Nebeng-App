<?php

use App\Http\Controllers\API\AksesCepatAPI;
use App\Http\Controllers\API\AlasanPembatalanAPI;
use App\Http\Controllers\API\DiskonAPI;
use App\Http\Controllers\API\JarakAPI;
use App\Http\Controllers\API\JenisLaporanAPI;
use App\Http\Controllers\API\KendaraanAPI;
use App\Http\Controllers\API\LaporkanAPI;
use App\Http\Controllers\API\MembatalkanAPI;
use App\Http\Controllers\API\PembatalanAPI;
use App\Http\Controllers\API\PemesananAPI;
use App\Http\Controllers\API\PengumumanAPI;
use App\Http\Controllers\API\UserDataAPI;
use App\Http\Controllers\API\LoginAPI;
use App\Http\Controllers\API\ProsesPemesananAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//akses cepat
Route::get('/getaksescepat',[AksesCepatAPI::class,'Get']);
Route::get('/getaksescepat/{id}',[AksesCepatAPI::class,'GetById']);
Route::post('/postaksescepat',[AksesCepatAPI::class,'Post']);
Route::post('/putaksescepat/{id}',[AksesCepatAPI::class,'Put']);
Route::post('/deleteaksescepat/{id}',[AksesCepatAPI::class,'Delete']);

//alasan pembatalan
Route::get('/getalasanpembatalan',[AlasanPembatalanAPI::class,'Get']);
Route::get('/getalasanpembatalan/{id}',[AlasanPembatalanAPI::class,'GetById']);
Route::post('/postalasanpembatalan',[AlasanPembatalanAPI::class,'Post']);
Route::post('/putalasanpembatalan/{id}',[AlasanPembatalanAPI::class,'Put']);
Route::post('/deletealasanpembatalan/{id}',[AlasanPembatalanAPI::class,'Delete']);

//diskon
Route::get('/getdiskon',[DiskonAPI::class,'Get']);
Route::get('/getdiskon/{id}',[DiskonAPI::class,'GetById']);
Route::post('/postdiskon',[DiskonAPI::class,'Post']);
Route::post('/putdiskon/{id}',[DiskonAPI::class,'Put']);
Route::post('/deletediskon/{id}',[DiskonAPI::class,'Delete']);

//jarak
Route::get('/getjarak',[JarakAPI::class,'Get']);
Route::get('/getjarak/{id}',[JarakAPI::class,'GetById']);
Route::post('/postjarak',[JarakAPI::class,'Post']);
Route::post('/putjarak/{id}',[JarakAPI::class,'Put']);
Route::post('/deletejarak/{id}',[JarakAPI::class,'Delete']);

//jenis laporan
Route::get('/getjenislaporan',[JenisLaporanAPI::class,'Get']);
Route::get('/getjenislaporan/{id}',[JenisLaporanAPI::class,'GetById']);
Route::post('/postjenislaporan',[JenisLaporanAPI::class,'Post']);
Route::post('/putjenislaporan/{id}',[JenisLaporanAPI::class,'Put']);
Route::post('/deletejenislaporan/{id}',[JenisLaporanAPI::class,'Delete']);

//kendaraan
Route::get('/getkendaraan',[KendaraanAPI::class,'Get']);
Route::get('/getkendaraan/{id}',[KendaraanAPI::class,'GetById']);
Route::post('/postkendaraan',[KendaraanAPI::class,'Post']);
Route::post('/putkendaraan/{id}',[KendaraanAPI::class,'Put']);
Route::post('/deletekendaraan/{id}',[KendaraanAPI::class,'Delete']);

//laporkan
Route::get('/getlaporkan',[LaporkanAPI::class,'Get']);
Route::get('/getlaporkan/{id}',[LaporkanAPI::class,'GetById']);
Route::post('/postlaporkan',[LaporkanAPI::class,'Post']);
Route::post('/putlaporkan/{id}',[LaporkanAPI::class,'Put']);
Route::post('/deletelaporkan/{id}',[LaporkanAPI::class,'Delete']);

//membatalkan
Route::get('/getmembatalkan',[MembatalkanAPI::class,'Get']);
Route::get('/getmembatalkan/{id}',[MembatalkanAPI::class,'GetById']);
Route::post('/postmembatalkan',[MembatalkanAPI::class,'Post']);
Route::post('/putmembatalkan/{id}',[MembatalkanAPI::class,'Put']);
Route::post('/deletemembatalkan/{id}',[MembatalkanAPI::class,'Delete']);

//pembatalan
Route::get('/getpembatalan',[PembatalanAPI::class,'Get']);
Route::get('/getpembatalan/{id}',[PembatalanAPI::class,'GetById']);
Route::post('/postpembatalan',[PembatalanAPI::class,'Post']);
Route::post('/putpembatalan/{id}',[PembatalanAPI::class,'Put']);
Route::post('/deletepembatalan/{id}',[PembatalanAPI::class,'Delete']);

//pemesanan
Route::get('/getpemesanan',[PemesananAPI::class,'Get']);
Route::get('/getpemesanan/{id}',[PemesananAPI::class,'GetById']);
Route::post('/postpemesanan',[PemesananAPI::class,'Post']);
Route::post('/putpemesanan/{id}',[PemesananAPI::class,'Put']);
Route::post('/deletepemesanan/{id}',[PemesananAPI::class,'Delete']);

//pengumuman
Route::get('/getpengumuman',[PengumumanAPI::class,'Get']);
Route::get('/getpengumuman/{id}',[PengumumanAPI::class,'GetById']);
Route::post('/postpengumuman',[PengumumanAPI::class,'Post']);
Route::post('/putpengumuman/{id}',[PengumumanAPI::class,'Put']);
Route::post('/deletepengumuman/{id}',[PengumumanAPI::class,'Delete']);

//user data
Route::get('/getuserdata',[UserDataAPI::class,'Get']);
Route::get('/getuserdata/{id}',[UserDataAPI::class,'GetById']);
Route::post('/postuserdata',[UserDataAPI::class,'Post']);
Route::post('/putuserdata/{id}',[UserDataAPI::class,'Put']);
Route::post('/deleteuserdata/{id}',[UserDataAPI::class,'Delete']);

//Login
Route::post('/login',[LoginAPI::class,'login']);

//proses pemesanan
Route::get('/getprosespemesanan',[ProsesPemesananAPI::class,'Get']);
Route::get('/getprosespemesanan/{id}',[ProsesPemesananAPI::class,'GetById']);
Route::post('/postprosespemesanan',[ProsesPemesananAPI::class,'Post']);
Route::post('/putprosespemesanan/{id}',[ProsesPemesananAPI::class,'Put']);
Route::post('/deleteprosespemesanan/{id}',[ProsesPemesananAPI::class,'Delete']);



