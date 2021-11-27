<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class KendaraanAPI extends BaseController
{
    public function Get()
    {
        $data = Kendaraan::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataKendaraan'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = Kendaraan::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataKendaraan'=>$data
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
        Kendaraan::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataKendaraan'=>$data
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
        $dataupdate = Kendaraan::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataKendaraan'=>$data
        ]);
    }

    public function Delete($id)
    {
        Kendaraan::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
