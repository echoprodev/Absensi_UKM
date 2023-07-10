<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                @if (Auth::user()->hak_akses == "Kemahasiswaan")
                <li class="nav-item">
                    <a href="{{ route('Kemahasiswaan-Absensi-UKM.index')}}">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Data Absensi</p>
                    </a>
                </li>
                @elseif (Auth::user()->hak_akses == "Mahasiswa")

                <li class="nav-item">
                    <a href="{{ route('Absensi-Mahasiswa.index')}}">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Cetak Data Absensi</p>
                    </a>
                </li>
                @elseif (Auth::user()->hak_akses == "Skretariat Musik")
                <li class="nav-item">
                    <a href="{{ route('AnggotaUKMMusik.index')}}">
                        <i class="fas fa-users"></i>
                        <p>Data Anggota Ormawa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Kegiatan-UKM-Musik.index')}}">
                        <i class="fas fa-calendar-alt"></i>
                        <p>Input Kegiatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('AbsensiUKM-Musik.index')}}">
                        <i class="fas fa-list-alt"></i>
                        <p>Input Absensi</p>
                    </a>
                </li>
                @elseif (Auth::user()->hak_akses == "Skretariat Mahagana")

                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-list-alt"></i>
                        <p>Input Absensi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-list"></i>
                        <p>Data Anggota Ormawa</p>
                    </a>
                </li>
                @elseif (Auth::user()->hak_akses == "Skretariat Futsal")

                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Input Absensi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-list"></i>
                        <p>Data Anggota Ormawa</p>
                    </a>
                </li>
                @elseif (Auth::user()->hak_akses == "Admin")
                <li class="nav-item">
                    <a href="{{ route('DataMahasiswa.index')}}">
                        <i class="fa fa-user"></i>
                        <p>Data Mahasiswa</p>
                        {{-- <span class="badge badge-success">Clear</span> --}}
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('ProgramStudi.index')}}">
                        <i class="fas fa-book"></i>
                        <p>Data Program Studi</p>
                         <span class="badge badge-success">Clear</span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('DataDosen.index')}}">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>Data Dosen</p>
                        <span class="badge badge-success">Clear</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('Ormawa.index')}}">
                        <i class="fas fa-building"></i>
                        <p>Data Ormawa</p>
                        {{-- <span class="badge badge-success">Clear</span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('AnggotaOrmawa.index')}}">
                        <i class="fas fa-users"></i>
                        <p>Anggota Ormawa</p>
                        {{-- <span class="badge badge-success">Clear</span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Pengguna.index')}}">
                        <i class="fas fa-users"></i>
                        <p>Data Pengguna</p>
                        {{-- <span class="badge badge-success">Clear</span> --}}
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('Akses.index')}}">
                        <i class="fas fa-universal-access"></i>
                        <p>Hak Akses</p>
                        {{-- <span class="badge badge-success">Clear</span> --}}
                    </a>
                </li> --}}
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
