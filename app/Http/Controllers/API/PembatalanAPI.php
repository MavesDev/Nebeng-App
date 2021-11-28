<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Pembatalan;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class PembatalanAPI extends BaseController
{
    public function Get()
    {
        $data = Pembatalan::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataPembatalan'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = Pembatalan::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataPembatalan'=>$data
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
        Pembatalan::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataPembatalan'=>$data
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
        $dataupdate = Pembatalan::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataPembatalan'=>$data
        ]);
    }

    public function Delete($id)
    {
        Pembatalan::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
