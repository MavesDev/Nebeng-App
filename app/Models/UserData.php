<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table = 'user_data';
    protected $fillable = ['nis','foto_profile','nama_lengkap','email','password','no_telp','jenis_kelamin'];
    use HasFactory;

    public function Kendaraan(){
        return $this->belongsTo(Kendaraan::class,'kendaraan');
    }
}
