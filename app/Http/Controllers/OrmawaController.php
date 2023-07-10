<?php

namespace App\Http\Controllers;

use App\Models\DataOrmawa;
use App\Models\Dosen;
use Illuminate\Http\Request;

class OrmawaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ormawa = DataOrmawa::all();
        return view('page.admin.ormawa.index',[
            'ormawa' => $ormawa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view('page.admin.ormawa.add',[
            'dosen' =>  $dosen
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
        $ormawa =  DataOrmawa::create([
            'nama_ormawa' => $request['nama_ormawa'],
            'pembimbing_ormawa' => $request['pembimbing_ormawa'],
        ]);

        return redirect()->route('Ormawa.index');
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
        $ormawa = DataOrmawa::find($id);
        $dosen = Dosen::all();

        return view('page.admin.ormawa.edit',[
            'ormawa'=>$ormawa,
            'dosen' =>$dosen
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
        $ormawa = DataOrmawa::findOrFail($id);

        $ormawa->update([
            'nama_ormawa' => $request['nama_ormawa'],
            'pembimbing_ormawa' => $request['pembimbing_ormawa'],
        ]);

        return redirect()->route('Ormawa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ormawa = DataOrmawa::find($id);

        $ormawa->delete();

        return redirect()->route('Ormawa.index');
    }
}
