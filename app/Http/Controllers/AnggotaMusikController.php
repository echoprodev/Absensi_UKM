<?php

namespace App\Http\Controllers;

use App\Models\absensi_musik;
use App\Models\anggota_musik;
use App\Models\AnggotaOrmawa;
use App\Models\DataMahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class AnggotaMusikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota_musik = AnggotaOrmawa::where('nama_ormawa', 'UKM Musik')->get();
        return view('page.ukm_musik.anggota.index',[
            'anggota_musik' => $anggota_musik,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = DataMahasiswa::all();

        return view('page.ukm_musik.anggota.add',[
            'mahasiswa' => $mahasiswa,
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
        $anggota_musik = AnggotaOrmawa::create([
            'nama_mahasiswa' => $request['nama_mahasiswa'],
            'jabatan_ormawa' => $request['jabatan_ormawa'],
            'nama_ormawa' => $request['nama_ormawa'],
            'status' => $request['status'],
        ]);

        return redirect()->route('AnggotaUKMMusik.index');
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
        $mahasiswa = DataMahasiswa::all();
        $anggota_musik = AnggotaOrmawa::find($id);

        return view('page.ukm_musik.anggota.edit',[
            'anggota_musik' => $anggota_musik,
            'mahasiswa' => $mahasiswa
        ]);
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
        $anggota_musik = AnggotaOrmawa::findOrFail($id);

        $anggota_musik->update([
            'nama_mahasiswa' => $request['nama_mahasiswa'],
            'jabatan_ormawa' => $request['jabatan_ormawa'],
            'status' => $request['status'],
        ]);

        return redirect()->route('AbsensiUKM-Musik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggotaMusik = AnggotaOrmawa::find($id);

        $anggotaMusik->delete();

        return redirect()->route('AnggotaUKMMusik.index');
    }
}
