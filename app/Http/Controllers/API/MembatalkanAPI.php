<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Membatalkan;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class MembatalkanAPI extends BaseController
{
    public function Get()
    {
        $data = Membatalkan::all();
        return response()->json([
            'message'=>'Data Terambil',
            'DataMembatalkan'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = Membatalkan::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataMembatalkan'=>$data
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
        Membatalkan::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataMembatalkan'=>$data
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
        $dataupdate = Membatalkan::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataMembatalkan'=>$data
        ]);
    }

    public function Delete($id)
    {
        Membatalkan::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
