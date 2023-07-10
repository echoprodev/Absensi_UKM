<?php

namespace App\Http\Controllers;

use App\Models\AbsensiUKM;
use App\Models\anggota_musik;
use Illuminate\Http\Request;

class AbsensiLainnyaMusikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absenMusik = AbsensiUKM::where('jenis_ormawa', 'UKM Musik')->get();

        return view('page.ukm_musik.absensi.lainnya.index', [
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

        return view('page.ukm_musik.absensi.lainnya.edit',[
            'anggotaMusik' => $anggotaMusik
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
            'kegiatan_lainnya' => $request['kegiatan_lainnya'],
            'keterangan_lainnya' => $request['keterangan_lainnya'],
        ]);
        return redirect()->route('AbsensiUKM-MusikLainnya.index');
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

        return redirect()->route('AbsensiUKM-MusikLainnya.index');
    }
}
