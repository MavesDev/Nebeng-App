<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('nis');
            $table->string('foto_profile');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('password');
            $table->string('no_telp');
            $table->string('jenis_kelamin');
            $table->foreignId('kendaraan'); //foreign key to table kendaraan
            $table->timestamps('tanggal_daftar');
            $table->float('rating');
            $table->string('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_data');
    }
}
