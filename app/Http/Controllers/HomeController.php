<?php

namespace App\Http\Controllers;

use App\Models\absensi_musik;
use App\Models\AbsensiUKM;
use App\Models\anggota_musik;
use App\Models\AnggotaOrmawa;
use App\Models\DataMahasiswa;
use App\Models\DataOrmawa;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        $pengguna   = User::all()->count();
        $mahasiswa  = DataMahasiswa::all()->count();
        $ormawa     = DataOrmawa::all()->count();
        $prodi      = Prodi::all()->count();
        $dosen      = Dosen::all()->count();
        return view('dashboard',[
            'pengguna'=>$pengguna,
            'mahasiswa'=>$mahasiswa,
            'ormawa'=>$ormawa,
            'prodi'=>$prodi,
            'dosen'=>$dosen
        ]);
    }

    public function kemahasiswaan()
    {
        $pengguna   = User::all()->count();
        $mahasiswa  = DataMahasiswa::all()->count();
        $ormawa     = DataOrmawa::all()->count();
        $prodi      = Prodi::all()->count();
        $dosen      = Dosen::all()->count();
        return view('dashboard',[
            'pengguna'=>$pengguna,
            'mahasiswa'=>$mahasiswa,
            'ormawa'=>$ormawa,
            'prodi'=>$prodi,
            'dosen'=>$dosen
        ]);
    }

    public function musik()
    {

        // $anggota_aktif    = AnggotaOrmawa::where('status', 'Aktif')->count();
        // $anggota_off    = AnggotaOrmawa::where('status', 'Off')->count();
        $pending_mingguan    = AbsensiUKM::where('status_absensi', 'Pending')->count();
        $setuju_mingguan     = AbsensiUKM::where('status_absensi', 'Setuju')->count();
        $ditolak_mingguan    = AbsensiUKM::where('status_absensi', 'Ditolak')->count();
        return view('dashboard',[
            // 'anggota_aktif' => $anggota_aktif,
            // 'anggota_off' => $anggota_off,
            'pending_mingguan'=>$pending_mingguan,
            'setuju_mingguan'=>$setuju_mingguan,
            'ditolak_mingguan'=>$ditolak_mingguan,
        ]);
    }

    public function mahagana()
    {
        return view('home');
    }

    public function mahasiswa()
    {
        $setuju = DB::table('users')
        ->join('absensi_ukm', 'users.name', '=', 'absensi_ukm.nama_anggota')
        ->where('absensi_ukm.status_absensi', 'Setuju')
        ->count();
        $pending = DB::table('users')
        ->join('absensi_ukm', 'users.name', '=', 'absensi_ukm.nama_anggota')
        ->where('absensi_ukm.status_absensi', 'Pending')
        ->count();
        $ditolak = DB::table('users')
        ->join('absensi_ukm', 'users.name', '=', 'absensi_ukm.nama_anggota')
        ->where('absensi_ukm.status_absensi', 'Ditolak')
        ->count();
        return view('dashboard',[
            'setuju'=>$setuju,
            'pending'=>$pending,
            'ditolak'=>$ditolak
        ]);
    }
}
