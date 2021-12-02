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
        return view('content.DataUser',compact('data'));
    }
}
