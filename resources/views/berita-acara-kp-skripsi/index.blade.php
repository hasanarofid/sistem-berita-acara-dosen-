@extends('layouts.layout')

@section('content')    
    <div class="container-fluid">
      <div class="row">
        <div class="col-8">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        </div>
        <div class="col-4">
        <a type="submit" href="{{ route('berita-acara-kp-skripsi.create') }}" class="btn btn-primary pull-right">Tambah</a>
        <div class="clearfix"></div>
        </div>
    </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Berita Acara KP dan Skirpsi </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Kegiatan
                        </th>
                        <th>
                          Hari
                        </th>
                        <th>
                          Waktu
                        </th>
                        <th>
                          Ruangan
                        </th>
                        <th>
                         Dosen
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @forelse ($model as $index => $item)
                   
                        <tr>
                          <td>
                          {{ $index+1 }}
                          </td>
                          <td>
                          {{ $item->kegiatan }}
                          </td>
                          <td>
                          {{ $item->hari }}
                          </td>
                          <td>
                            {{ $item->waktu }}
                            </td>
                          <td>
                          {{ $item->ruangan->ruangan }}
                          </td>
                          <td>
                          {{ $item->dosen->nidn.' - '.$item->dosen->nama }}
                          </td>
                          <td>
                            <a href="{{ route('berita-acara.detail', $item->id) }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>
                            </a>
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