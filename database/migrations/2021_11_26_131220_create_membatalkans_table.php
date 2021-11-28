<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembatalkansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membatalkan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pembatalan')->nullable();
            $table->unsignedBigInteger('id_pemesanan')->nullable();
            $table->timestamps();
        });

        Schema::table('membatalkan', function (Blueprint $table) {
            $table->foreign('id_pembatalan')->references('id')->on('pembatalan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_pemesanan')->references('id')->on('pemesanan')->onDelete('set null')->onUpdate('set null');
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
