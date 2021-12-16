<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Riwayat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pesanan')->nullable();
            $table->unsignedBigInteger('id_kendaraan')->nullable();
            $table->timestamps();
        });

        Schema::table('riwayat', function (Blueprint $table) {
            $table->foreign('id_pesanan')->references('id')->on('pemesanan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_kendaraan')->references('id')->on('kendaraan')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat');
    }
}
