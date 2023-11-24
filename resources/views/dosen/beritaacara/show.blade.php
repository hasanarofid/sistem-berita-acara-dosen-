@extends('user.layouts.layout2')

@section('content')
<div id="absen">
  <div class="container">
    <div class="card mb-4">
    <div class="row">
    </div>
    <div class="row">
      <div class="col-12">
        <h4 class="text-success">Berita Acara: {{ $model->keterangan }}</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table>
          <tr>
            <th>Matakuliah</th>
            <td>:</td>
            <td>{{$model->matkul->matkul}}</td>
          </tr>
          <tr>
            <th>Kelas</th>
            <td>:</td>
            <td>{{$model->kelas->nama}}</td>
          </tr>
          <tr>
            <th>Program Studi</th>
            <td>:</td>
            <td>{{$model->matkul->prodi->prodi}}</td>
          </tr>
          <tr>
            <th>Dosen</th>
            <td>:</td>
            <td>{{$model->dosen->nama}}</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table">
            <thead class=" text-primary">
              <th>
                No
              </th>
              <th>
                Nama
              </th>
              <th>
                Jam Kedatanagan
              </th>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
            @forelse ($detail as $index => $item)
              <tr>
                <td>
                {{ $no++ }}
                </td>
                <td>
                 ({{$item->mahasiswa->nama}})
                </td>
                <td>
                {{ $item->waktu }}
                </td>
               
               
              </tr>
              @empty
              <tr>
                <td>
                  data tidak tersedia
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
      </div>
  

    </div>

    </div>
</div>

</div>

@endsection