<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Diskon;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class DiskonAPI extends BaseController
{
    public function Get()
    {
        $data = Diskon::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataDiskon'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = Diskon::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataDiskon'=>$data
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
        Diskon::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataDiskon'=>$data
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
        $dataupdate = Diskon::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataDiskon'=>$data
        ]);
    }

    public function Delete($id)
    {
        Diskon::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
