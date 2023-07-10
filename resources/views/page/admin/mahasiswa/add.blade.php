@extends('layouts.dashboard')
@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Dashboard {{ Auth::user()->hak_akses }}</h2>
                    <h3 class="text-white mb-2">{{ Auth::user()->name }}</h3>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <h5 class="text-white mb-2 mr-5 h3" id="tanggal"></h5>
                    <h5 class="text-white float-right mr-5 h3" id="jam"></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt-3">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="card-title">Tambah Data Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('DataMahasiswa.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="kode_cabang">Nim</label>
                                <input type="text" class="form-control" id="kode_cabang" name="nim_mahasiswa"
                                    placeholder="Input Nama Ormawa" value="">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="kode_cabang" name="nama_mahasiswa"
                                    placeholder="Input Nama Ormawa" value="">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Program Studi</label>
                                <select name="prodi_mahasiswa" id="" class="form-control">
                                    <option value="" selected disabled>Pilih Program Studi</option>
                                    @foreach ($prodi as $data)
                                        <option value="{{ $data->nama_prodi }}">{{ $data->nama_prodi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="kode_cabang" name="ttl_mahasiswa"
                                    placeholder="Input Nama Ormawa" value="">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Tahun Masuk</label>
                                <input type="text" class="form-control" id="kode_cabang" name="angkatan_mahasiswa"
                                    placeholder="Input Tahun Masuk" value="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm text-white ml-auto" type="submit">Simpan
                                    Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
