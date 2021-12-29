<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
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
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.create', compact('peminjaman'));
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
            'id_barang' => 'required',
            'nama' => 'required',
            'telp' => 'required',
            'qty' => 'required',
            'tgl_pinjam' => 'required',

        ]);

        $peminjaman = new Peminjaman;
        $peminjaman->nama = $request->nama;
        $peminjaman->telp = $request->telp;
        $peminjaman->qty = $request->qty;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->id_barang = $request->id_barang;
        $peminjaman->save();
        return redirect()->route('barang_keluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.show', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.edit', compact('peminjaman'));
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
        $request->validate([
            'id_barang' => 'required',
            'nama' => 'required',
            'telp' => 'required',
            'qty' => 'required',
            'tgl_pinjam' => 'required',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->nama = $request->nama;
        $peminjaman->telp = $request->telp;
        $peminjaman->qty = $request->qty;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->id_barang = $request->id_barang;
        $peminjaman->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index');
    }
}
