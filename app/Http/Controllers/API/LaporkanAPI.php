<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Laporkan;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class LaporkanAPI extends BaseController
{
    public function Get()
    {
        $data = Laporkan::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataLaporkan'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = Laporkan::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataLaporkan'=>$data
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
        Laporkan::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataLaporkan'=>$data
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
        $dataupdate = Laporkan::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataLaporkan'=>$data
        ]);
    }

    public function Delete($id)
    {
        Laporkan::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
