<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Jarak;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class JarakAPI extends BaseController
{
    public function Get()
    {
        $data = Jarak::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataJarak'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = Jarak::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataJarak'=>$data
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
        Jarak::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataJarak'=>$data
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
        $dataupdate = Jarak::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataJarak'=>$data
        ]);
    }

    public function Delete($id)
    {
        Jarak::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
