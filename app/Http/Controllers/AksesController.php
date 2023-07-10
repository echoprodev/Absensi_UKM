<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AksesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akses = Akses::all();
        return view('page.admin.akses.index',[
            'akses' => $akses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $akses = Akses::all();
        return view('page.admin.akses.add',[
            'akses' => $akses
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
        $akses = Akses::create([
            'nama_akses' => $request['nama_akses']
        ]);

        return redirect()->route('Akses.index');
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
        $akses = Akses::find($id);
        return view('page.admin.akses.edit',[
            'akses' => $akses
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
        $akses = Akses::findOrFail($id);

        $akses->update([
            'nama_akses' => $request['nama_akses'],
        ]);

        return redirect()->route('Akses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $akses = Akses::find($id);

        $akses->delete();

        return redirect()->route('Akses.index');
    }
}
