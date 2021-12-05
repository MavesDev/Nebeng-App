<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function beranda(){
        if(!Auth::check()){
            return redirect('/login');
        }
        $userCount = DB::table('user_data')->count();
        return view('Dashboard',compact('userCount'));
    }
    public function login(){
        if(Auth::check()){
            return redirect('/');
        }
        return view('Login');
    }

    public function settings()
    {
        return view('Setting');
    }

    public function data_user(){
        return view('content.DataUser');
    }

    public function feedback()
    {
        return view('content.Feedback');
    }

    public function history()
    {
        return view('content.History');
    }

    public function rekap()
    {
        return view('content.Rekap');
    }

    // ====> Dalam tahap pengembangan <====
    // public function voucher()
    // {
    //     return view('Voucher');
    // }
}
