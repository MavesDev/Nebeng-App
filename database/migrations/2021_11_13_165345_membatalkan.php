<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Membatalkan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membatalkan', function (Blueprint $table) {
            $table->bigIncrements('id_membatalkan');
            $table->foreignId('id_pembatalan');
            $table->foreignId('id_pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membatalkan');
    }
}
