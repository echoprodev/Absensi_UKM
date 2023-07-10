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
                    <div class="card-body">
                        <form method="post" action="{{ route('AbsensiUKM-MusikMingguan.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="kode_cabang">Nama Mahasiswa</label>
                                <select name="nama_anggota" class="form-control" id="nama">
                                    <option value="" selected disabled>Pilih Anggota UKM</option>
                                    @foreach ($anggotaMusik as $data)
                                        <option value="{{ $data->anggota_musik }}">{{ $data->anggota_musik }} -
                                            {{ $data->jabatan_musik }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Struktur Organisasi</label>
                                <select name="jabatan_ormawa" id="" class="form-control">
                                    <option value="" selected disabled>Piliha Struktur UKM</option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Skretaris">Skretaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Anggota">Anggota</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Tanggal Kegiatan Mingguan</label>
                                <input type="date" class="form-control" id="kode_cabang" name="kegiatan_mingguan"
                                    placeholder="Input Nama Ormawa" value="">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Keterangan Kegiatan Mingguan</label>
                                <input type="text" class="form-control" id="kode_cabang" name="keterangan_mingguan"
                                    placeholder="Input keterangan kegiatan mingguan" value="">
                            </div>
                            <input type="text" class="form-control" id="kode_cabang" name="jenis_ormawa"
                                placeholder="Input Nama Ormawa" value="UKM Musik" hidden>

                            <input type="text" class="form-control" id="kode_cabang" name="komentar"
                                placeholder="" value="Komentar Kemahasiswaan" hidden>
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
