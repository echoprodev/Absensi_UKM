@extends('layouts.dashboard')
@section('content')
    <div class="panel-header card card-round">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="pb-2 fw-bold">Dashboard {{ Auth::user()->hak_akses }}</h2>
                    <h3 class="mb-2">{{ Auth::user()->name }}</h3>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <h5 class="mb-2 mr-5 h3" id="tanggal"></h5>
                    <h5 class="float-right mr-5 h3" id="jam"></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt-3">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="card-title">Data Pengguna</h3>
                        <a href="{{ route('Pengguna.create') }}" class="btn btn-success btn-round btn-md ml-auto >
                            <i class="fa fa-plus"></i>
                            Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" >
                            <table class="table table-bordered">
                                <thead class=" text-center">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Pengguna</th>
                                        <th>Email Pengguna</th>
                                        <th>Akses Pengguna</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @php
                                        $id = 1;
                                    @endphp
                                    @forelse ($pengguna as $row)
                                        <tr>
                                            <td>{{ $id++ }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->hak_akses }}</td>
                                            <td>
                                                <a href="{{ route('Pengguna.edit', $row->id)}}" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-edit"></i></a>
                                                <form action="{{ route('Pengguna.destroy', $row->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah anda ingin menghapus data? {{ $row->name }}')"">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">Data Masih Kosong</td>
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
