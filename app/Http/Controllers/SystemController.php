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
        // dd($request->all());
        $user = [
            'nis'=>$request->nis,
            'nama_lengkap'=>$request->nama_lengkap,
            'email'=>$request->email,
            'password'=>$request->password,
            'no_telp'=>$request->no_telp,
            'kendaraan'=>$request->kendaraan,
            'jenis_kelamin'=>$request->jenis_kelamin,
        ];
        $data = UserData::where('id',$id)->update($user);
        if($data){
            return redirect('/keloladata')->with('status','Data Berhasil Diubah');
        }else{
            return redirect('/keloladata')->with('status','Data Gagal Diubah');
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
                    $output = '<tr onclick="editToogle('.$rs->id.')" value="'.$rs->id.'">' .
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
        if($request->ajax()){
            $data = [];
                $output = '';
                $result = Riwayat::whereMonth('created_at','=',$request->bulan)
                        ->whereYear('created_at','=',$request->tahun)
                        ->get();
                if($result){
                    foreach($result as $rs){
                        $output = '<tr><td><img src="'.url('image/None.png').'" alt=""></td>
                        <td>'.$rs->User->nama_lengkap.'</td>'.
                        '<td>'.$rs->UserPenumpang->nama_lengkap.'</td>'.
                        '<td>'.$rs->Pesanan->alamat_jemput.'</td>'.
                        '<td>'.$rs->Pesanan->alamat_tujuan.'</td>'.
                        '<td>'.$rs->User->Kendaraan->type_kendaraan ."|". $rs->User->Kendaraan->merk_kendaraan.'</td>'.
                        '<td>'.$rs->Pesanan->total_bayar.'</td>'.
                        '<td>'.$rs->Pesanan->created_at.'</td></tr>';

                        $data[] = $output;
                    }
                }
                // return $output;
                return Response(($result->isEmpty())?'<tr><td colspan="9" class="text-center">Data Tidak Ditemukan</td></tr>' : $data);
        }
    }

    public function orderuser (Request $request){
        if($request->ajax()){
            if($request->orderName){
                $data = [];
                $output = '';
                $result = UserData::orderBy('nama_lengkap',$request->orderName)->get();
                if($result){
                    foreach($result as $rs){
                        $output = '<tr onclick="editToogle('.$rs->id.')" value="'.$rs->id.'">' .
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
    }
}
