<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembatalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembatalan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alasan_pembatalan')->nullable();
            $table->timestamps();
        });

        Schema::table('pembatalan', function (Blueprint $table) {
            $table->foreign('alasan_pembatalan')->references('id')->on('alasan_pembatalan')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembatalan');
    }
}
