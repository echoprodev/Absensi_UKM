<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('page.admin.prodi.index',[
            'prodi' => $prodi
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

        return view('page.admin.prodi.add',[
            'dosen' =>$dosen
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
        $prodi =  Prodi::create([
            'nama_prodi' => $request['nama_prodi'],
            'ketua_prodi' => $request['ketua_prodi'],
        ]);

        return redirect()->route('ProgramStudi.index');
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
        $dosen = Dosen::all();
        $prodi = Prodi::find($id);

        return view('page.admin.prodi.edit',[
            'dosen' =>$dosen,
            'prodi' =>$prodi
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
        $prodi = Prodi::findOrFail($id);
        $prodi->update([
            'nama_prodi' => $request['nama_prodi'],
            'ketua_prodi' => $request['ketua_prodi'],
        ]);

        return redirect()->route('ProgramStudi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prodi = Prodi::find($id);

        $prodi->delete();

        return redirect()->route('ProgramStudi.index');
    }
}
