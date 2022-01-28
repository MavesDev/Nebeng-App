<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminData;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use App\Models\Riwayat;

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


    public function edituser(Request $request,$id){
        $user = [
            'nis'=>$request->nis,
            'nama_lengkap'=>$request->nama_lengkap,
            'email'=>$request->email,
            'password'=>$request->password,
            'no_telp'=>$request->no_telp,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'password'=>$request->password
        ];
        $data = UserData::where('id',$id)->update($user);
        if($data){
            return redirect('/keloladata/detail/'.$id)->with('status','Data Berhasil Diubah');
        }else{
            return redirect('/keloladata/detail/'.$id)->with('status','Data Gagal Diubah');
        }
    }

    public function hapususer($id){
        $data = UserData::where('id',$id)->delete();
        if($data){
            return redirect('/keloladata')->with('status','Data Berhasil Dihapus');
        }else{
            return redirect('/keloladata')->with('status','Data Gagal Dihapus');
        }
    }

    public function tambahuser(Request $request){
        if($request->ajax()){
            $user = [
                'nis'=>$request->nis,
                'nama_lengkap'=>$request->nama_lengkap,
                'email'=>$request->email,
                'password'=>$request->password,
                'kendaraan'=>$request->kendaraan,
                'no_telp'=>$request->no_telp,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'tanggal_daftar'=>Carbon::now(),
                'rating'=>0,
                'role'=>'user'
            ];
            $data = UserData::create($user);
            if($data){
                return "Data Berhasil Ditambahkan";
            }else{
                return "Data Gagal Ditambahkan";
            }
        }
    }

    public function searchuser(Request $request){
        if($request->ajax()){
            $data = [];
            $output = '';
            $result = UserData::where('nama_lengkap','like','%'.$request->keyword.'%')->get();
            if($result){
                foreach($result as $rs){
                    $output = '<tr onclick="editToogle()" value="'.$rs->id.'">' .
                    '<td><img src="'.asset("image/None.png").'" alt=""></td>' .
                    '<td>' .$rs->nama_lengkap. '</td>' .
                    '<td>' .$rs->tanggal_daftar. '</td>' .
                    '</tr></div>';

                    $data[] = $output;
                }
            }
            // return $output;
            return Response(($result->isEmpty())?'<tr><td colspan="9" class="text-center">Data Tidak Ditemukan</td></tr>' : $data);
        }
    }

    public function searchrekap(Request $request){
        //where has yang dipanggil nama relasi function bukan nama table
        $data = Riwayat::whereHas('User',function($query) use($request){
            $query->where('nama_lengkap','like','%'.$request->search.'%');
        })->get();
        return view('content.Rekap',compact('data'));
    }
    public function filterrekap(Request $request){
        $data = Riwayat::whereMonth('created_at','=',$request->bulan)
                        ->whereYear('created_at','=',$request->tahun)
                        ->get();
        return view('content.Rekap',compact('data'));
    }
}
