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
                        <h3 class="card-title">Tambah Absensi Kegiatan Mingguan</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('AbsensiUKM-Musik.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="kode_cabang">Nama Mahasiswa</label>
                                <select name="nama_anggota" class="form-control select2" id="nama">
                                    <option value="" selected disabled>Pilih Anggota UKM</option>
                                    @foreach ($anggotaMusik as $data)
                                        <option value="{{ $data->nama_mahasiswa }}">{{ $data->nama_mahasiswa }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Struktur Organisasi / Struktur Panitia Kegiatan</label>
                                <select name="struktur" id="" class="form-control">
                                    <option value="" selected disabled>Piliha Struktur UKM</option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Skretaris">Skretaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Anggota">Anggota</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Organisasi Mahasiswa</label>
                                <select name="jenis_ormawa" class="form-control select2" id="nama">
                                    <option value="" selected disabled>Pilih Organisasi Mahasiswa</option>
                                    @foreach ($ormawa as $data)
                                        <option value="{{ $data->nama_ormawa }}">{{ $data->nama_ormawa }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Kegiatan Ormawa</label>
                                <select name="kegiatan" class="form-control select2" id="nama">
                                    <option value="" selected disabled>Pilih Kegiatan</option>
                                    @foreach ($kegiatan as $data)
                                        <option value="{{ $data->nama_kegiatan }}">{{ $data->nama_kegiatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Kegiatan Ormawa</label>
                                <input type="text" class="form-control" id="kode_cabang" name="keterangan_kegiatan"
                                    placeholder="Input keterangan kegiatan" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="kode_cabang" name="komentar" placeholder="" value="Komentar Kemahasiswaan" hidden>
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
