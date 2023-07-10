@extends('layouts.dashboard')
@section('content')
    <div class="panel-header card card-round">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class=" pb-2 fw-bold">Dashboard {{ Auth::user()->hak_akses }}</h2>
                    <h3 class=" mb-2">{{ Auth::user()->name }}</h3>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <h5 class=" mb-2 mr-5 h3" id="tanggal"></h5>
                    <h5 class=" float-right mr-5 h3" id="jam"></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt-3">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="card-title">Edit Data Organisasi Mahasiswa <i>({{$ormawa->nama_ormawa}})</i></h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('Ormawa.update', $ormawa->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kode_cabang">Nama Ormawa</label>
                                <input type="text" class="form-control" id="kode_cabang" name="nama_ormawa" placeholder="Input Nama Ormawa" value="{{$ormawa->nama_ormawa}}">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Nama Pembimbing Ormawa</label>
                                <select name="pembimbing_ormawa" id="" class="form-control">
                                    <option value="" selected disabled>Pilih Dosen Pembimbing</option>
                                    @foreach ($dosen as $data)
                                        <option value="{{$data->nama_dosen}}" {{ $ormawa->pembimbing_ormawa == $data->nama_dosen ? 'selected' : '' }}>{{$data->nama_dosen}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm  ml-auto" type="submit">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
