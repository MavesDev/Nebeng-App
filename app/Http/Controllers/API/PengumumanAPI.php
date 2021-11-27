<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class PengumumanAPI extends BaseController
{
    public function Get()
    {
        $data = Pengumuman::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataPengumuman'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = Pengumuman::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataPengumuman'=>$data
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
        Pengumuman::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataPengumuman'=>$data
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
        $dataupdate = Pengumuman::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataPengumuman'=>$data
        ]);
    }

    public function Delete($id)
    {
        Pengumuman::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
