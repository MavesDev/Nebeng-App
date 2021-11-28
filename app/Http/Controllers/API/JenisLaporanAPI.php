<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\JenisLaporan;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class JenisLaporanAPI extends BaseController
{
    public function Get()
    {
        $data = JenisLaporan::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataJenisLaporan'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = JenisLaporan::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataJenisLaporan'=>$data
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
        JenisLaporan::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataJenisLaporan'=>$data
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
        $dataupdate = JenisLaporan::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataJenisLaporan'=>$data
        ]);
    }

    public function Delete($id)
    {
        JenisLaporan::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
