<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = User::all();

        return view('page.admin.pengguna.index',[
            'pengguna' => $pengguna
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
        return view('page.admin.pengguna.add',[
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
        $pengguna = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'hak_akses' => $request['hak_akses'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('Pengguna.index');
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
        $pengguna = User::find($id);
        $akses = Akses::all();

        return view('page.admin.pengguna.edit',[
            'pengguna'=>$pengguna,
            'akses'=>$akses
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
        $pengguna = User::findOrFail($id);
        $pengguna->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'hak_akses' => $request['hak_akses'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('Pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = User::find($id);

        $pengguna->delete();

        return redirect()->route('Pengguna.index');
    }
}
