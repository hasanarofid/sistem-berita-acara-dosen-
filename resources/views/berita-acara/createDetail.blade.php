@extends('layouts.layout')

@section('content')
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <a href="{{ route('berita-acara.detail',['id'=>$model->id]) }}" class="btn btn-success pull-left">
                <i class="fa fa-arrow-left"></i>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card dosen">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Detail Berita Acara</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('berita-acara.store-detail',['id'=>$model->id]) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mahasiswa</label>
                          
                          <select class="form-control @error('id_mahasiswa') is-invalid @enderror" id="exampleFormControlSelect1" name="id_mahasiswa">
                            <option>-- Pilih Mahasiswa --</option>
                            @foreach ($mahasiswa as $item)
                              <option value="{{ $item->id }}">{{ $item->nim.' - '.$item->nama }}</option>
                            @endforeach
                          </select>
                          @error('id_mahasiswa') <div class="text-muted">{{ $message }}</div> @enderror

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal</label>
                          <input type="date" class="form-control" name="hari" value="{{ old('hari') }}" 
                          class="form-control @error('hari') is-invalid @enderror">
                          @error('hari') <div class="text-muted">{{ $message }}</div> @enderror
                
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Waktu</label>
                          <input type="text" class="form-control" name="waktu" value="{{ old('waktu') }}" 
                            class="form-control @error('waktu') is-invalid @enderror">
                            @error('waktu') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                      </div>
                    </div>


                    <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection