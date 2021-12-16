<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table = 'riwayat';
    use HasFactory;

    public function Pesanan(){
        return $this->belongsTo(Pemesanan::class,'id_pesanan');
    }

    public function Kendaraan(){
        return $this->belongsTo(Kendaraan::class,'id_kendaraan');
    }

    public function User(){
        return $this->belongsTo(UserData::class,'id_user');
    }

    public function UserPenumpang(){
        return $this->belongsTo(UserData::class,'id_penumpang');
    }
}
