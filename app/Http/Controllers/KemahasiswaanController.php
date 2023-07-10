<?php

namespace App\Http\Controllers;

use App\Models\AbsensiUKM;
use Illuminate\Http\Request;

class KemahasiswaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAbsensi = AbsensiUKM::all();
        return view('page.kemahasiswaan.index',[
            'dataAbsensi' => $dataAbsensi
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
        $absen = AbsensiUKM::find($id);

        return view('page.kemahasiswaan.edit',[
            'absen' => $absen
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
        $absen = AbsensiUKM::findOrFail($id);
        $absen->update([
            'status_absensi' => $request['status_absensi'],
            'komentar' => $request['komentar'],
        ]);
        return redirect()->route('Kemahasiswaan-Absensi-UKM.index');
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
