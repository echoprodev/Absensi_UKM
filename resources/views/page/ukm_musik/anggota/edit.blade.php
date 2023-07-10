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
                        <h3 class="card-title">Edit Data Mahasiswa <i>({{$anggota_musik->nama_mahasiswa}})</i></h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('AnggotaUKMMusik.update', $anggota_musik->id)}}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="kode_cabang">Nama Mahasiswa</label>
                                <select name="nama_mahasiswa" class="form-control" id="nama">
                                    @foreach ($mahasiswa as $data)
                                        <option value="{{$data->nama_mahasiswa}}"{{ $data->nama_mahasiswa == $anggota_musik->nama_mahasiswa  ? 'selected' : '' }}>{{$data->nim_mahasiswa}} -{{$data->nama_mahasiswa}} - {{$data->prodi_mahasiswa}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Struktur Organisasi</label>
                                <select name="jabatan_ormawa" id="" class="form-control">
                                    <option value="Ketua"{{ $anggota_musik->jabatan_musik == 'Ketua' ? 'selected' : '' }} >Ketua</option>
                                    <option value="Skretaris" {{ $anggota_musik->jabatan_musik == 'Skretaris' ? 'selected' : '' }}>Skretaris</option>
                                    <option value="Bendahara" {{ $anggota_musik->jabatan_musik == 'Bendahara' ? 'selected' : '' }}>Bendahara</option>
                                    <option value="Anggota" {{ $anggota_musik->jabatan_musik == 'Anggota' ? 'selected' : '' }}>Anggota</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Status Keatifan</label>
                                <select name="status" id="" class="form-control">
                                    <option value="Aktif" {{ $anggota_musik->status_musik == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Off" {{ $anggota_musik->status_musik == 'Off' ? 'selected' : '' }}>Off</option>
                                </select>
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
