<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BeritaAcaraDetail extends Model
{
        use SoftDeletes;

        protected $table = 'berita_acara_detail';
        protected $dates = [];

            public function berita_acara()
    {
        return $this->belongsTo(BeritaAcara::class,'id_berita_acara','id');
    }
        public function mahasiswa()
        {
            return $this->belongsTo(Mahasiswa::class,'id_mahasiswa','id');
        }
}
