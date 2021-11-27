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
            'password_admin'=> $request->password
        ])->first();
        if($user){
            // Auth::guard('admin')->login($user);
            //masalah login
            if(Auth::check()){
                return redirect('/')->with('status','Login Sukses');
            }
        }else{
            dd("Login Gagal");
        }
    }
}
