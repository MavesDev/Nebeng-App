<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('foto_profile');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('password');
            $table->string('no_telp');
            $table->string('jenis_kelamin');
            $table->unsignedBigInteger('kendaraan')->nullable();
            $table->dateTime('tanggal_daftar');
            $table->float('rating');
            $table->string('role');
            $table->timestamps();
        });

        Schema::table('user_data', function (Blueprint $table) {
            $table->foreign('kendaraan')->references('id')->on('kendaraan')->onDelete('set null')->onUpdate('set null'); //foreign key to table kendaraan
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
