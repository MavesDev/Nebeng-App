<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class PemesananAPI extends BaseController
{
    public function Get()
    {
        $data = Pemesanan::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataPemesanan'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = Pemesanan::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataPemesanan'=>$data
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
        Pemesanan::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataPemesanan'=>$data
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
        $dataupdate = Pemesanan::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataPemesanan'=>$data
        ]);
    }

    public function Delete($id)
    {
        Pemesanan::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
