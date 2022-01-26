<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProsesPemesanan extends Model
{
    protected $table = 'proses_pemesanan';
    protected $fillable = ['pemesanan_id','driver_id','penumpang_id'];
    use HasFactory;

    public function Driver(){
        return $this->belongsTo(UserData::class,'driver_id');
    }

    public function Penumpang(){
        return $this->belongsTo(UserData::class,'penumpang_id');
    }
}
