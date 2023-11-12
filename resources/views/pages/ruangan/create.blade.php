@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <a href="{{ route('ruangan.index') }}" class="btn btn-success pull-left">
                <i class="fa fa-arrow-left"></i>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Ruangan</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('ruangan.store') }}" method="POST">
                  @csrf
                  <input type="hidden" name="id_gedung" value="1" >
                    <div class="row">
              
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ruangan</label>
                          <input type="text" class="form-control" name="ruangan" value="{{ old('ruangan') }}" 
                            class="form-control @error('ruangan') is-invalid @enderror">
                            @error('ruangan') <div class="text-muted">{{ $message }}</div> @enderror
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