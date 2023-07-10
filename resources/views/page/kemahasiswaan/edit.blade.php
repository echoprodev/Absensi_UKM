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
                        <h3 class="card-title">Edit Data Absensi <i>({{$absen->nama_anggota}})</i></h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('Kemahasiswaan-Absensi-UKM.update', $absen->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kode_cabang">Status Absensi</label>
                                <select name="status_absensi" id="" class="form-control">
                                    <option value="Pending"{{ $absen->status_absensi == "Pending" ? 'selected' : '' }} disabled>Pending</option>
                                    <option value="Setuju"{{ $absen->status_absensi == "Setuju" ? 'selected' : '' }}>Setuju</option>
                                    <option value="Ditolak"{{ $absen->status_absensi == "Ditolak" ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Kegiatan Ormawa</label>
                                <input type="text" name="komentar" value="{{$absen->kegiatan}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan Kegiatan</label>
                                <input type="text" name="komentar" value="{{$absen->keterangan_kegiatan}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan Kemahasiswaan</label>
                                <input type="text" name="komentar" value="{{$absen->komentar}}" class="form-control">
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
