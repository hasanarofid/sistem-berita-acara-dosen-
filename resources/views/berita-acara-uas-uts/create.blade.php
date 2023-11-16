@extends('layouts.layout')

@section('content')
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <a href="{{ route('berita-acara-uts-uas.index') }}" class="btn btn-success pull-left">
                <i class="fa fa-arrow-left"></i>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card dosen">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Berita Acara</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('berita-acara-uts-uas.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kagiatan</label>
                          
                          <input type="text" class="form-control" name="kegiatan" value="{{ old('kegiatan') }}" 
                            class="form-control @error('kegiatan') is-invalid @enderror">
                            @error('kegiatan') <div class="text-muted">{{ $message }}</div> @enderror
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

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label  class="bmd-label-floating">Dosen</label>
                          <select class="form-control @error('id_dosen') is-invalid @enderror" id="exampleFormControlSelect1" name="id_dosen">
                            <option>-- Pilih Dosen --</option>
                            @foreach ($dosen as $item)
                              <option value="{{ $item->id }}">{{ $item->nidn .' - '. $item->nama }}</option>
                            @endforeach
                          </select>
                          @error('id_dosen') <div class="text-muted">{{ $message }}</div> @enderror


                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label  class="bmd-label-floating">Mata Kuliah</label>
                          <select class="form-control @error('id_matkul') is-invalid @enderror" id="exampleFormControlSelect1" name="id_matkul">
                            <option>-- Pilih Mata Kuliah --</option>
                            @foreach ($matkul as $item)
                              <option value="{{ $item->id }}">{{ $item->kode .' - '. $item->matkul }}</option>
                            @endforeach
                          </select>
                          @error('id_matkul') <div class="text-muted">{{ $message }}</div> @enderror


                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label  class="bmd-label-floating">Ruangan</label>
                          <select class="form-control @error('id_ruangan') is-invalid @enderror" id="exampleFormControlSelect1" name="id_ruangan">
                            <option>-- Pilih Ruangan --</option>
                            @foreach ($ruangan as $item)
                              <option value="{{ $item->id }}">{{ $item->ruangan }}</option>
                            @endforeach
                          </select>
                          @error('id_ruangan') <div class="text-muted">{{ $message }}</div> @enderror


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