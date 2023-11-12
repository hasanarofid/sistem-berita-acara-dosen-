<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaAcara;
use App\Models\Fakultas;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Ruangan;
use Carbon\Carbon;



class BeritaAcaraController extends Controller
{
    //index
    public function index(){
        $model = BeritaAcara::where('jenis_ba','Berita Acara')->get();
        return view('berita-acara.index',compact('model'));
    }

    //create
    public function create(){
        $fakultas = Fakultas::all();
        $dosen = Dosen::all();
        $matkul = Matkul::all();
        $ruangan = Ruangan::all();


        return view('berita-acara.create',compact('fakultas','dosen','matkul','ruangan'));
    }

    //simpan
    public function store(Request $request){
        $model = new BeritaAcara();
        $model->jenis_ba = 'Berita Acara';
        $model->kegiatan = $request->kegiatan;
        $model->hari = $request->hari;
        $model->id_dosen = $request->id_dosen;
        $model->id_matkul = $request->id_matkul;
        $model->id_ruangan = $request->id_ruangan;
        $model->id_prodi = 1;
        $model->id_ta = 1;
        $model->id_kelas = 1;
        $model->waktu = '08:00';
        $model->save();

        return redirect()->route('berita-acara.index')->with('status', 'Data berhasil ditambahkan!');
    }
}
