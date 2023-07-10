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
                        <h3 class="card-title">Data Dosen</h3>
                        <a href="{{ route('DataDosen.create') }}" class="btn btn-success btn-round btn-md ml-auto text-white">
                            <i class="fa fa-plus"></i>
                            Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-white">
                            <table class="table table-bordered">
                                <thead class="bg-success text-center">
                                    <tr>
                                        <th>ID</th>
                                        <th>NIDN/NUPN</th>
                                        <th>Nama Dosen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-primary text-center">
                                    @php
                                        $id = 1;
                                    @endphp
                                    @forelse ($dosen as $row)
                                        <tr>
                                            <td>{{ $id++ }}</td>
                                            <td>{{ $row->nidn_dosen }}</td>
                                            <td>{{ $row->nama_dosen }}</td>
                                            <td>
                                                <a href="{{ route('DataDosen.edit', $row->id)}}" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-edit"></i></a>
                                                <form action="{{ route('DataDosen.destroy', $row->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah anda ingin menghapus data? {{ $row->nama_dosen }}')"">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">Data Masih Kosong</td>
                                        </tr>
                                    @endforelse
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
