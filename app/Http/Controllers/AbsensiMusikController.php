<?php

namespace App\Http\Controllers;

use App\Models\AbsensiUKM;
use App\Models\anggota_musik;
use App\Models\AnggotaOrmawa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensiMusikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absenMusik = AbsensiUKM::where('nama_mahasiswa', Auth::user()->name)->get();

        return view('page.ukm_musik.absensi.index', [
            'absenMusik' => $absenMusik
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggotaMusik = AnggotaOrmawa::all();

        return view('page.ukm_musik.absensi.add', [
            'anggotaMusik' => $anggotaMusik
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $absenMusik = AbsensiUKM::create([
            'nama_anggota' => $request['nama_anggota'],
            'jenis_ormawa' => $request['jenis_ormawa'],
            'jabatan_ormawa' => $request['jabatan_ormawa'],
            'kegiatan_mingguan' => $request['kegiatan_mingguan'],
            'keterangan_mingguan' => $request['keterangan_mingguan'],
        ]);

        return redirect()->route('AbsensiUKM-Musik.index');
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
