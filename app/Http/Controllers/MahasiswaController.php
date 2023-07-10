<?php

namespace App\Http\Controllers;

use App\Models\AbsensiUKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAbsen = DB::table('users')
        ->join('absensi_ukm', 'absensi_ukm.nama_anggota', '=', 'users.name')
        ->where('nama_anggota', Auth::user()->name)
        ->get();
        return view('page.mahasiswa.index',[
            'dataAbsensi' => $dataAbsen
        ]);
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
        $dataAbsen = AbsensiUKM::find($id);
        return view('page.mahasiswa.edit',[
            'dataAbsen' => $dataAbsen
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
        $dataAbsen = AbsensiUKM::findOrFail($id);

        $dataAbsen->update([
            'keterangan_mingguan' =>$request['keterangan_mingguan']
        ]);

        return redirect()->route('Absensi-Mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataAbsen = AbsensiUKM::find($id);

        $dataAbsen->delete();

        return redirect()->route('Absensi-Mahasiswa.index');
    }
}
