<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\AksesCepat;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class AksesCepatAPI extends BaseController
{
    public function Get()
    {
        $data = AksesCepat::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataAksesCepat'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = AksesCepat::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataAksesCepat'=>$data
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
        AksesCepat::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataAksesCepat'=>$data
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
        $dataupdate = AksesCepat::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataAksesCepat'=>$data
        ]);
    }

    public function Delete($id)
    {
        AksesCepat::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
