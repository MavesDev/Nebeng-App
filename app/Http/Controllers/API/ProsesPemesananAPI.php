<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Models\ProsesPemesanan;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller as BaseController;

class ProsesPemesananAPI extends BaseController{
    public function Get()
    {
        $data = ProsesPemesanan::with(['Driver','Penumpang'])->get();
        return response()->json([
            'message'=>'Data Terambil',
            'DataPemesanan'=>$data
        ]);
    }

    public function GetById($id)
    {
        $data = ProsesPemesanan::find($id);
        return response()->json([
            'message'=>'Data Terambil',
            'DataPemesanan'=>$data
        ]);
    }

    public function Post(Request $request)
    {
        $data = [
            'pemesanan_id' => $request->pemesanan_id,
            'driver_id' => $request->driver_id,
            'penumpang_id' => $request->penumpang_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        ProsesPemesanan::create($data);
        return response()->json([
            'message'=>'Data Berhasil Ditambahkan',
            'DataPemesanan'=>$data
        ]);
    }

    public function Put(Request $request, $id)
    {
        $data = [
            'pemesanan_id' => $request->pemesanan_id,
            'driver_id' => $request->driver_id,
            'penumpang_id' => $request->penumpang_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        $dataupdate = ProsesPemesanan::find($id);
        $dataupdate->update($data);
        return response()->json([
            'message'=>'Data Berhasil Diubah',
            'DataPemesanan'=>$data
        ]);
    }

    public function Delete($id)
    {
        ProsesPemesanan::destroy($id);
        return response()->json([
            'message'=>'Data Berhasil Dihapus'
        ]);
    }
}
