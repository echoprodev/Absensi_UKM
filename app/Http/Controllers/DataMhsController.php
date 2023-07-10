<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DataMhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DataMahasiswa::all();
        return view('page.admin.mahasiswa.index',[
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('page.admin.mahasiswa.add',[
            'prodi' => $prodi
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
        $mahasiswa = DataMahasiswa::create([
            'nim_mahasiswa' => $request['nim_mahasiswa'],
            'nama_mahasiswa' => $request['nama_mahasiswa'],
            'prodi_mahasiswa' => $request['prodi_mahasiswa'],
            'ttl_mahasiswa' => $request['ttl_mahasiswa'],
            'angkatan_mahasiswa' => $request['angkatan_mahasiswa'],
        ]);
        return redirect()->route('DataMahasiswa.index');
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
        $mahasiswa = DataMahasiswa::find($id);
        $prodi = Prodi::all();

        return view('page.admin.mahasiswa.edit',[
            'mahasiswa' => $mahasiswa,
            'prodi' => $prodi
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
        $mahasiswa = DataMahasiswa::findOrFail($id);
        $prodi = Prodi::all();

        $mahasiswa->update([
            'nim_mahasiswa' => $request['nim_mahasiswa'],
            'nama_mahasiswa' => $request['nama_mahasiswa'],
            'prodi_mahasiswa' => $request['prodi_mahasiswa'],
            'ttl_mahasiswa' => $request['ttl_mahasiswa'],
            'angkatan_mahasiswa' => $request['angkatan_mahasiswa'],
        ]);
        return redirect()->route('DataMahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = DataMahasiswa::find($id);

        $mahasiswa->delete();

        return redirect()->route('DataMahasiswa.index');

    }
}
