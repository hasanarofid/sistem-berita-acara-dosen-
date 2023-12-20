<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBeritaAcara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_acara', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan');
            $table->string('jenis_ba');
            $table->integer('id_prodi');
            $table->integer('id_ta');
            $table->integer('id_kelas');
            $table->integer('id_matkul');
            $table->integer('id_dosen');
            $table->string('hari');
            $table->string('waktu');
            $table->integer('id_ruangan');
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
        Schema::dropIfExists('berita_acara');
    }
}
