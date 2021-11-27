<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function beranda(){
        dd(Auth::user());
        return view('Dashboard');
    }
    public function login(){
        return view('Login');
    }

    public function settings(){
        return view('Setting');
    }
}
