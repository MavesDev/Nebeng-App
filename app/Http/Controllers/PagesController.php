<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\PemesananAPI;
use App\Models\Kendaraan;
use App\Models\Riwayat;
use App\Models\UserData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function beranda(){
        $userCount = UserData::count();
        $transaksiCount = Riwayat::count();
        return view('Dashboard',compact('userCount','transaksiCount'));
    }
    public function login(){
        return view('Login');
    }

    public function settings(){
        return view('Setting');
    }

    public function kelolaData(){
        $data = UserData::all();
        $kendaraan = Kendaraan::all();
        return view('content.Data',compact('data','kendaraan'));
    }

    public function detail($id)
    {
        $data = UserData::find($id);
        return view('content.Detail', compact('data'));
    }

    public function rekap()
    {
        $data = Riwayat::all();
        return view('content.Rekap', compact('data'));
    }

    public function feedback()
    {
        $data = UserData::all();
        return view('content.Feedback', compact('data'));
    }

    public function history()
    {
        $data = Riwayat::all();
        $dataonce = null;
        return view('content.History', compact('data','dataonce'));
    }

    public function detailhistory($id){
        $data = Riwayat::all();
        $dataonce = Riwayat::find($id);
        return view('content.History', compact('data','dataonce'));
    }
}
