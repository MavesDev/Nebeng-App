<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogSystem extends Model
{
    protected $table = 'log_system';
    protected $fillable = ['admin_id','action','table','created_at','updated_at'];
    use HasFactory;
}
