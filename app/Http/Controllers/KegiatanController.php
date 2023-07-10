<?php

namespace App\Http\Controllers;

use App\Models\DataOrmawa;
use App\Models\KegiatanOrmawa;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = KegiatanOrmawa::where('ormawa', 'UKM Musik')->get();
        return view('page.kegiatan.index',[
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ormawa = DataOrmawa::all();
        return view('page.kegiatan.add',[
            'ormawa' => $ormawa
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
        $kegiatan =  KegiatanOrmawa::create([
            'nama_kegiatan' => $request['nama_kegiatan'],
            'tgl_kegiatan' => $request['tgl_kegiatan'],
            'ormawa' => $request['ormawa'],
        ]);

        return redirect()->route('Kegiatan-UKM-Musik.index');
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
