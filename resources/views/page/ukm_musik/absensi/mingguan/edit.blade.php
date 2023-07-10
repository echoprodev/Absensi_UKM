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
                        <h3 class="card-title">Absensi Kegiatan Ormawa</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('AbsensiUKM-Musik.update', $anggotaMusik->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kode_cabang">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="kode_cabang" name="jenis_ormawa"
                                    placeholder="Input keterangan kegiatan mingguan" readonly value="{{$anggotaMusik->nama_anggota}}">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Struktur Organisasi / Struktur Panitia Kegiatan</label>
                                <select name="struktur" id="" class="form-control">
                                    <option value="Ketua"{{ $anggotaMusik->jabatan_musik == 'Ketua' ? 'selected' : '' }} >Ketua</option>
                                    <option value="Skretaris" {{ $anggotaMusik->jabatan_musik == 'Skretaris' ? 'selected' : '' }}>Skretaris</option>
                                    <option value="Bendahara" {{ $anggotaMusik->jabatan_musik == 'Bendahara' ? 'selected' : '' }}>Bendahara</option>
                                    <option value="Anggota" {{ $anggotaMusik->jabatan_musik == 'Anggota' ? 'selected' : '' }}>Anggota</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Kegiatan Ormawa</label>
                                <input type="text" class="form-control" id="kode_cabang" name="kegiatan"
                                    placeholder="Input keterangan kegiatan mingguan" readonly value="{{$anggotaMusik->kegiatan}}">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Keterangan Kegiatan</label>
                                <input type="text" class="form-control" id="kode_cabang" name="keterangan_kegiatan"
                                    placeholder="Input keterangan kegiatan" value="{{$anggotaMusik->keterangan_kegiatan}}">
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
