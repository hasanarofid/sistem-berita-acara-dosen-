@extends('user.layouts.layout2')

@section('content')
<!-- profile -->
<div id="profile">
    <div class="container">
        <div class="row">
        @forelse ($model as $index => $item)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                    <h5 class="card-title">{{$item->kegiatan}}</h5>
                    <table>
                        <tr>
                            <th>Jenis Berita Acara</th>
                            <td>:</td>
                            <td>{{$item->jenis_ba}}</td>
                        </tr>
                        <tr>
                            <th>Waktu</th>
                            <td>:</td>
                            <td>{{$item->hari}}, {{$item->waktu}}</td>
                        </tr>
                        <tr>
                            <th>Ruangan</th>
                            <td>:</td>
                            <td>{{$item->ruangan->ruangan}}</td>
                        </tr>
                        <tr>
                            <th>Program Studi</th>
                            <td>:</td>
                            <td>{{$item->matkul->prodi->prodi}}</td>
                        </tr>
                       
                        <tr>
                            <td><a href="{{ route('berita-acara.show-ba' , $item->id) }}" class="btn btn-primary mt-2">Detail</a></td>
                        </tr>
                    </table>
                    
                    </div>
                </div>
            </div>
        @empty
        <p>Berita Acara Kosong</p>
        @endforelse
        </div>
    </div>
  </div>
  <!-- end profile -->
@endsection