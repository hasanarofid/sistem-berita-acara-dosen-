<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BeritaAcara extends Model
{
        use SoftDeletes;
        protected $table = 'berita_acara';

    public function matkul()
    {
        return $this->belongsTo(Matkul::class,'id_matkul','id');
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class,'id_ruangan','id');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class,'id_dosen','id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'id_kelas','id');
    }

    public function krs()
    {
        return $this->hasMany(Krs::class,'id_schedule');
    }

    public function absen()
    {
        return $this->hasMany(Absen::class,'id_schedule');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class,'id_schedule');
    }
}
