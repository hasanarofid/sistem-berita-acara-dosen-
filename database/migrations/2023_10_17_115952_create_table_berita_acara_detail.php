<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBeritaAcaraDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_acara_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('id_berita_acara');
            $table->integer('id_mahasiswa');
             $table->string('paraf')->nullable();
             $table->string('keterangan')->nullable();
             $table->dateTime('tgl_acara')->nullable();
             $table->dateTime('tgl_kedatangan')->nullable();
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
        Schema::dropIfExists('berita_acara_detail');
    }
}
