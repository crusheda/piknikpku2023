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
        Schema::create('table_peserta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ikut');
            $table->integer('kloter');
            $table->integer('bus');
            $table->string('nama');
            $table->integer('no_kursi');
            $table->integer('kaos');
            $table->string('unit');
            $table->string('penyakit');
            $table->string('hp');
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
        Schema::dropIfExists('table_peserta');
    }
}
