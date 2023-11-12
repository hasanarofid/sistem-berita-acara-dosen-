@extends('layouts.layout')

@section('content')    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <a href="{{ route('berita-acara-formal-non.index') }}" class="btn btn-success pull-left">
                <i class="fa fa-arrow-left"></i>
              </a>
            </div>
          </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">Berita Acara {{$model->kegiatan}}</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                      <p>Tanggal: {{$model->hari}}</p>
                      <p>Waktu: {{$model->waktu}}</p>
                      <p>Ruangan: {{$model->ruangan->ruangan}}</p>
                      <p>Dosen: {{$model->dosen->nama}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-8">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            </div>
            <div class="col-4">
            <a type="submit" href="{{ route('berita-acara-formal-non.create-detail',['id'=>$model->id]) }}" class="btn btn-primary pull-right">Tambah</a>
            <div class="clearfix"></div>
            </div>
        </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Kehadiran Mahasiswa</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
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
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @forelse ($items as $index => $item)
                        <tr>
                          <td>
                          {{ $index+1 }}
                          </td>
                          <td>
                           ({{$item->mahasiswa->nama}})
                          </td>
                          <td>
                          {{ $item->waktu }}
                          </td>
                         
                          <td>
                            <a href="{{ route('berita-acara-formal-non.editdetail',['id'=> $item->id]) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('berita-acara-formal-non.destroy', $item->id) }}" 
                                    method="post" 
                                    class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                                </button>
                            </form>
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
    </div>
@endsection