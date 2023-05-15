<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ikut');
            $table->integer('kloter')->nullable();
            $table->integer('bus')->nullable();
            $table->string('nama');
            $table->integer('no_kursi')->nullable();
            $table->string('kaos');
            $table->string('unit');
            $table->string('penyakit')->nullable();
            $table->string('hp')->nullable();
            $table->string('alasan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta');
    }
}
