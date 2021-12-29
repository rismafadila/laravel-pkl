<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pengembalian = Pengembalian::all();
        return view('pengembalian.index', compact('pengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengembalian = Pengembalian::all();
        return view('pengembalian.create', compact('pengembalian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pinjam' => 'required',
            'qty' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $pengembalian = new Pengembalian;
        $pengembalian->id_pinjam = $request->id_pinjam;
        $pengembalian->qty = $request->qty;
        $pengembalian->tgl_kembali = $request->tgl_kembali;
        $pengembalian->save();
        return redirect()->route('pengembalian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        return view('pengembalian.show', compact('pengembalian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        return view('pengembalian.edit', compact('pengembalian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_pinjam' => 'required',
            'qty' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $pengembalian = new Pengembalian;
        $pengembalian->id_pinjam = $request->id_pinjam;
        $pengembalian->qty = $request->qty;
        $pengembalian->tgl_kembali = $request->tgl_kembali;
        $pengembalian->save();
        return redirect()->route('pengembalian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->delete();
        return redirect()->route('pengembalian.index');
    }
}
