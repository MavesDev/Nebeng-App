<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProsesPemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proses_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pemesanan_id')->nullable();
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->unsignedBigInteger('penumpang_id')->nullable();
            $table->timestamps();
        });

        Schema::table('proses_pemesanan', function (Blueprint $table) {
            $table->foreign('pemesanan_id')->references('id')->on('pemesanan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('driver_id')->references('id')->on('user_data')->onDelete('set null')->onUpdate('set null');
            $table->foreign('penumpang_id')->references('id')->on('user_data')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proses_pemesanan');
    }
}
