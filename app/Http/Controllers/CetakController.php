<?php

namespace App\Http\Controllers;

use App\Models\AbsensiUKM;
use App\Models\DataMahasiswa;
use App\Models\DataOrmawa;
use App\Models\Indeks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class CetakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DataMahasiswa::where('nama_mahasiswa', Auth::user()->name)->get();
        $absensi = DB::table('absensi_ukm')
        ->join('data_mahasiswa','data_mahasiswa.nama_mahasiswa', 'absensi_ukm.nama_anggota')
        ->join('indeks', 'indeks.struktur', '=', 'absensi_ukm.struktur')
        ->join('kegiatan_ormawa', 'kegiatan_ormawa.nama_kegiatan', '=', 'absensi_ukm.kegiatan')
        ->where([
            ['status_absensi','Setuju'],
            ['nama_mahasiswa', Auth::user()->name],

        ])
        ->get();

        $html = view('page.export.cetak',
    [
        'mahasiswa' => $mahasiswa,
        'absensi' => $absensi,
    ]);

    $pdf = PDF::loadview('page.export.cetak',
    [
        'mahasiswa' => $mahasiswa,
        'absensi' => $absensi,
    ]);
	return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
