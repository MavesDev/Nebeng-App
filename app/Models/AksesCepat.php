<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesCepat extends Model
{
    protected $table = 'akses_cepat';
    protected $fillable = ['alamat_jemput','alamat_tujuan','created_at','updated_at'];
    use HasFactory;
}
