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

    public function settings(){
        if(!Auth::check()){
            return redirect('/login');
        }
        return view('Setting');
    }

    public function kelolaData(){
        if(!Auth::check()){
            return redirect('/login');
        }
        $data = UserData::all();
        return view('content.Data',compact('data'));
    }

    public function detail()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $data = UserData::all();
        return view('content.Detail', compact('data'));
    }

    public function rekap()
    {
        if (!Auth::check()) {
            return redirect('/rekap');
        }
        $data = UserData::all();
        return view('content.Rekap', compact('data'));
    }

    public function feedback()
    {
        if (!Auth::check()) {
            return redirect('/feedback');
        }
        $data = UserData::all();
        return view('content.Feedback', compact('data'));
    }

    public function history()
    {
        if (!Auth::check()) {
            return redirect('/history');
        }
        $data = UserData::all();
        return view('content.History', compact('data'));
    }
}
