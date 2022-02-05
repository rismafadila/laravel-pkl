<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\databarang;
use App\Models\Pengembalian;
use App\Models\pinjam;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = laporan::with('pinjam')->get();
        $pinjam= pinjam::all();
        $data_barang= databarang::all();
        $pengembalian= Pengembalian::all();
        return view('laporan.index', compact('laporan','pinjam','data_barang','pengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laporan = Laporan::all();
        $pinjam= pinjam::all();
        $data_barang= databarang::all();
        $pengembalian= Pengembalian::all();
        return view('laporan.create', compact('laporan','pinjam','data_barang','pengembalian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_data' => 'required',
            'id_pinjem' => 'required',
            'id_kembali' => 'required',
            'jurusan' => 'required',
        ]);

        $laporan = new Laporan;
        $laporan->id_data = $request->id_data;
        $laporan->id_pinjem = $request->id_pinjem;
        $laporan->id_kembali = $request->id_kembali;
        $laporan->jurusan = $request->jurusan;
        $laporan->save();
        return redirect()->route('laporan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
