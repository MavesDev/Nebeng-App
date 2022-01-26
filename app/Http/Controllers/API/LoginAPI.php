<?php

namespace App\Http\Controllers\API;

use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LoginAPI extends BaseController
{
    public function login(Request $request)
    {
        $admin = UserData::where([
            'nis'=> $request->nis,
            'password'=> $request->password
        ])->first();
        if($admin){
            return response()->json([
                "Message"=>"Login Sukses",
                "Data"=>$admin
            ]);
        }else{
            return response()->json([
                "Message"=>"Login Gagal"
            ]);
        }
    }
}
