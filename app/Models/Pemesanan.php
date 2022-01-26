<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['alamat_jemput','alamat_tujuan','user_id','tanggal_pemesanan','total_bayar','created_at','updated_at'];
    use HasFactory;

    public function Driver(){
        return $this->belongsTo(UserData::class,'user_id');
    }
}
