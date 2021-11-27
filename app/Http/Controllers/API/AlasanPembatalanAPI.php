<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\AlasanPembatalan;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class AlasanPembatalanAPI extends BaseController
{
    public function Get()
    {
        $data = AlasanPembatalan::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataAlasanPembatalan'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = AlasanPembatalan::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataAlasanPembatalan'=>$data
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
        AlasanPembatalan::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataAlasanPembatalan'=>$data
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
        $dataupdate = AlasanPembatalan::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataAlasanPembatalan'=>$data
        ]);
    }

    public function Delete($id)
    {
        AlasanPembatalan::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
