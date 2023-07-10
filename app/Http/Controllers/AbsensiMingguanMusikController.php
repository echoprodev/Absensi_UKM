<?php

namespace App\Http\Controllers;

use App\Models\AbsensiUKM;
use App\Models\anggota_musik;
use App\Models\AnggotaOrmawa;
use App\Models\DataOrmawa;
use App\Models\KegiatanOrmawa;
use Illuminate\Http\Request;

class AbsensiMingguanMusikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absenMusik = AbsensiUKM::where('jenis_ormawa', 'UKM Musik')->get();

        return view('page.ukm_musik.absensi.mingguan.index', [
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
        $anggotaMusik = AnggotaOrmawa::where('status', 'Aktif')->get();
        $ormawa = DataOrmawa::where('nama_ormawa', 'UKM Musik')->get();
        $kegiatan = KegiatanOrmawa::where('ormawa', 'UKM Musik')->get();


        return view('page.ukm_musik.absensi.mingguan.add', [
            'anggotaMusik' => $anggotaMusik,
            'ormawa' => $ormawa,
            'kegiatan' => $kegiatan
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
            'struktur' => $request['struktur'],
            'kegiatan' => $request['kegiatan'],
            'keterangan_kegiatan' => $request['keterangan_kegiatan'],
            'komentar' => $request['komentar']
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
        $anggotaMusik = AbsensiUKM::find($id);
        $mahasiswa = AnggotaOrmawa::all();
        $ormawa = DataOrmawa::where('nama_ormawa', 'UKM Musik')->get();

        return view('page.ukm_musik.absensi.mingguan.edit',[
            'anggotaMusik' => $anggotaMusik,
            'ormawa' => $ormawa,
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
        $anggotaMusik = AbsensiUKM::findOrFail($id);

        $anggotaMusik->update([
            'nama_mahasiswa' => $request['nama_mahasiswa'],
            'jenis_oramawa' => $request['jenis_oramawa'],
            'struktur' => $request['struktur'],
            'kegiatan' => $request['kegiatan'],
            'keterangan_kegiatan' => $request['keterangan_kegiatan'],
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
        $absenMusik = AbsensiUKM::find($id);

        $absenMusik->delete();

        return redirect()->route('AbsensiUKM-Musik.index');
    }
}
