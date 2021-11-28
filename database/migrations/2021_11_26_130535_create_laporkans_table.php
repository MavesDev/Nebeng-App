<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporkansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporkan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_laporan')->nullable();
            $table->string('isi_laporan');
            $table->timestamps();
        });

        Schema::table('laporkan', function (Blueprint $table) {
            $table->foreign('jenis_laporan')->references('id')->on('jenis_laporan')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporkan');
    }
}
