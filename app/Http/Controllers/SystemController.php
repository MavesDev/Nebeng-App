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
            Auth::login($user);
            if(Auth::check()){
                return redirect('/')->with('status','Login Sukses');
            }
        }else{
                return redirect('/login')->with('status','Login Gagal');
        }
    }

    public function settingsSystem(Request $request){
        $ubahgambar = null;
        $ubahpassword = null;
        // $passwordsame = false;
        $data = AdminData::find(Auth::user()->id);
        $data->nama_admin = $request->nama_admin;
        $data->username_admin = $request->username_admin;
        //upload foto
        if($request->file()){
            $data->foto_profile = $request->file('image')->store('public/images');
            $ubahgambar = true;
        }
        if($request->password_admin !=null && $request->password_admin == Auth::user()->password_admin){
            $data->password_admin = $request->new_password;
            $ubahpassword = true;
        }else if($request->password_admin != null && $request->password_admin != Auth::user()->password_admin){
            $ubahpassword = false;
        }
        // dd($ubahpassword);
        $data->role = Auth::user()->role;
        $data->save();
        return redirect('/settings')->with('status','Profile Berhasil Diubah'.($ubahgambar?' dan Gambar Berhasil Diubah':'').($ubahpassword?' dan Password Berhasil Diubah':''));
    }

    public function logoutSystem(){
        Auth::logout();
        return redirect('/login')->with('status','Logout Sukses');
    }
}
