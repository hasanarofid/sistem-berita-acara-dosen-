<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BeritaAcaraController extends Controller
{
    //index
    public function index(){
        return view('berita-acara.index');
    }
}
