<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = \App\Models\Jurusan::All();
        return view('jurusan.index', ['jurusan' => $jurusan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menangkap Data Yang Diinput
        $jrs = $request->get('kdjrs');
        $nama = $request->get('namajrs');
        $fakultas = $request->get('fakultas');

        //Menyimpan data kedalam tabel
        $save_jrs = new \App\Models\Jurusan();
        $save_jrs->jrs = $jrs;
        $save_jrs->nama_jrs = $nama;
        $save_jrs->fakultas = $fakultas;
        $save_jrs->save();
        return redirect()->route('jurusan.index');
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
        $jrs_edit = \App\Models\Jurusan::findOrFail($id);
        return view('Jurusan.edit', ['jurusan' => $jrs_edit]);
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
        $jrs = \App\Models\Jurusan::findOrFail($id);
        $jrs->jrs = $request->get('kdjrs');
        $jrs->nama_jrs = $request->get('namajrs');
        $jrs->fakultas = $request->get('fakultas');
        $jrs->save();
        return redirect()->route('jurusan.index', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jrs = \App\Models\Jurusan::findOrFail($id);

        $jrs->delete();

        return redirect()->route('jurusan.index');
    }
}
