<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaAcara;
use App\Models\Fakultas;
class BeritaAcaraController extends Controller
{
    //index
    public function index(){
        $model = BeritaAcara::get();
        return view('berita-acara.index',compact('model'));
    }

    //create
    public function create(){
        $fakultas = Fakultas::all();
        return view('berita-acara.create',compact('fakultas'));
    }
}
