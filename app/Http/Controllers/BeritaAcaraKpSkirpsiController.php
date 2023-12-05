<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaAcara;
use App\Models\Fakultas;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Ruangan;
use App\Models\Mahasiswa;
use Carbon\Carbon;
use App\Models\BeritaAcaraDetail;

class BeritaAcaraKpSkirpsiController extends Controller
{
   //index
   public function index(){
    $model = BeritaAcara::where('jenis_ba','Berita Acara KP Skirpsi')->get();
    return view('berita-acara-kp-skripsi.index',compact('model'));
}

//create
public function create(){
    $fakultas = Fakultas::all();
    $dosen = Dosen::all();
    $matkul = Matkul::all();
    $ruangan = Ruangan::all();


    return view('berita-acara-kp-skripsi.create',compact('fakultas','dosen','matkul','ruangan'));
}

//simpan
public function store(Request $request){
    // dd($request);
    $model = new BeritaAcara();
    $model->jenis_ba = 'Berita Acara KP Skirpsi';
    $model->kegiatan = $request->kegiatan;
    $model->hari = $request->hari;
    $model->id_dosen = $request->id_dosen;
    $model->id_matkul = $request->id_matkul;
    $model->id_ruangan = $request->id_ruangan;
    $model->id_prodi = 1;
    $model->id_ta = 1;
    $model->id_kelas = 1;
    $model->waktu = $request->waktu;
    $model->deleted_at = null;
    $model->save();

    return redirect()->route('berita-acara-kp-skripsi.index')->with('status', 'Data berhasil ditambahkan!');
}

//update detail
public function updateDetail($id,Request $request){
    $modelDetail =  BeritaAcaraDetail::withoutGlobalScope(\Illuminate\Database\Eloquent\SoftDeletingScope::class)
    ->where('id', $id)->first();
    $modelDetail->id_mahasiswa = $request->id_mahasiswa;
    $modelDetail->waktu = $request->waktu;
    $modelDetail->tgl_kedatangan = $request->hari;
    $modelDetail->save();
    return redirect()->route('berita-acara-kp-skripsi.detail',['id'=>$modelDetail->id_berita_acara])->with('status', 'Data berhasil diupdate!');

}

public function detail($id){
    $model = BeritaAcara::find($id);
    // dd($model->id);
    $items = BeritaAcaraDetail::withoutGlobalScope(\Illuminate\Database\Eloquent\SoftDeletingScope::class)
    ->where('id_berita_acara', $model->id)
    ->get();
    // dd($items);
    return view('berita-acara-kp-skripsi.detail',compact('model','items'));
}

//createDetail 
public function createDetail($id){
    $model = BeritaAcara::find($id);
    $items = BeritaAcaraDetail::where('id_berita_acara', $id)->get();
    $mahasiswa = Mahasiswa::get();
    return view('berita-acara-kp-skripsi.createDetail',compact('model','items','mahasiswa'));
}

// editdetail
public function editdetail($id){
    // dd($id);
    $model =  BeritaAcaraDetail::withoutGlobalScope(\Illuminate\Database\Eloquent\SoftDeletingScope::class)
    ->where('id', $id)->first();
    // dd($model);
    $mahasiswa = Mahasiswa::get();
    return view('berita-acara-kp-skripsi.editDetail',compact('model','mahasiswa'));
}

//storeDetail
public function storeDetail($id,Request $request){
    $model = BeritaAcara::find($id);
    $modelDetail = new BeritaAcaraDetail();
    $modelDetail->id_berita_acara =$model->id;
    $modelDetail->id_mahasiswa = $request->id_mahasiswa;
    $modelDetail->waktu = $request->waktu;
    $modelDetail->tgl_kedatangan = $request->hari;
    $modelDetail->save();
    return redirect()->route('berita-acara-kp-skripsi.detail',['id'=>$id])->with('status', 'Data berhasil ditambahkan!');

}

//destroy
public function hapusDetail($id){
    $modelDetail =  BeritaAcaraDetail::withoutGlobalScope(\Illuminate\Database\Eloquent\SoftDeletingScope::class)
    ->where('id', $id)->first();
  
    $result = $modelDetail->delete();

if ($result) {
return redirect()->back()->with('status', 'hapus successful!');

} else {
return redirect()->back()->with('status', 'hapus gagal!');
// Deletion failed
}

}
}
