<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class UserDataAPI extends BaseController
{
    public function Get()
    {
        $data = UserData::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataUserData'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = UserData::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataUserData'=>$data
        ]);
    }

    public function Post(Request $request)
    {
        $data = [
            'alamat_jemput' => $request->alamat_jemput,
            'alamat_tujuan' => $request->alamat_tujuan,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        UserData::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataUserData'=>$data
        ]);
    }

    public function Put(Request $request, $id)
    {
        $data = [
            'alamat_jemput' => $request->alamat_jemput,
            'alamat_tujuan' => $request->alamat_tujuan,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        $dataupdate = UserData::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataUserData'=>$data
        ]);
    }

    public function Delete($id)
    {
        UserData::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
