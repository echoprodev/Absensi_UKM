<?php

namespace App\Http\Controllers;

use App\Models\AnggotaOrmawa;
use App\Models\DataMahasiswa;
use App\Models\DataOrmawa;
use Illuminate\Http\Request;

class AnggotaOrmawaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota_ormawa = AnggotaOrmawa::all();
        return view('page.admin.anggota_ormawa.index',[
            'anggota_ormawa' => $anggota_ormawa
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
        $ormawa = DataOrmawa::all();

        return view('page.admin.anggota_ormawa.add',[
            'mahasiswa' => $mahasiswa,
            'ormawa' => $ormawa,
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

        return redirect()->route('AnggotaOrmawa.index');
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
        $ormawa = DataOrmawa::all();
        $anggota_ormawa = AnggotaOrmawa::find($id);

        return view('page.admin.anggota_ormawa.edit',[
            'anggota_ormawa' => $anggota_ormawa,
            'mahasiswa' => $mahasiswa,
            'ormawa' => $ormawa
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
            'nama_ormawa' => $request['nama_ormawa'],
            'status' => $request['status'],
        ]);

        return redirect()->route('AnggotaOrmawa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota_ormawa = AnggotaOrmawa::find($id);

        $anggota_ormawa->delete();

        return redirect()->route('AnggotaOrmawa.index');
    }
}
