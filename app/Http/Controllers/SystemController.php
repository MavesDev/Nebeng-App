<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminData;
use Illuminate\Support\Facades\Auth;

class SystemController extends Controller
{
    public function loginSystem(Request $request){
        $user = AdminData::where([
            'username_admin'=> $request->username,
            'password'=> $request->password
        ])->first();
        dd($user);
        if($user){
            Auth::login($user);
            return redirect('/')->with('status','Login Sukses');
        }else{
            dd("Login Gagal");
        }
    }
}
