<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->bigIncrements('id_pesanan');
            $table->string('alamat_jemput');
            $table->string('alamat_tujuan');
            $table->dateTime('tanggal_pembatalan');
            $table->dateTime('tanggal_pemesanan');
            $table->decimal('total_bayar',8,2); //format money
            $table->decimal('total_bayar_diskon',8,2); //format money
            $table->decimal('komisi_driver',8,2); //format money
            $table->decimal('komisi_perusahaan',8,2); //format money
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
