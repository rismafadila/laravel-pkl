<?php

namespace App\Http\Controllers;
use App\Models\Barang;
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
        $pinjam = Peminjaman::with('barang')->get();
        return view('peminjaman.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pinjam = Peminjaman::all();
        return view('peminjaman.create', compact('pinjam'));
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
            'id_barang' => 'required',
            'nama' => 'required',
            'telp' => 'required',
            'qty' => 'required',
            'tgl_pinjam' => 'required',
        ]);

        $pinjam = new Peminjaman;
        $pinjam->id_barang = $request->id_barang;
        $pinjam->nama = $request->nama;
        $pinjam->telp = $request->telp;
        $pinjam->qty = $request->qty;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->save();
        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pinjam = peminjaman::findOrFail($id);
        return view('peminjaman.show', compact('pinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pinjam = peminjaman::findOrFail($id);
        return view('peminjaman.edit', compact('pinjam'));
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
            'id_barang' => 'required',
            'nama' => 'required',
            'telp' => 'required',
            'qty' => 'required',
            'tgl_pinjam' => 'required',
        ]);

        $pinjam = new Peminjaman;
        $pinjam->id_barang = $request->id_barang;
        $pinjam->nama = $request->nama;
        $pinjam->telp = $request->telp;
        $pinjam->qty = $request->qty;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->save();
        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjam = Peminjaman::findOrFail($id);
        $pinjam->delete();
        return redirect()->route('peminjaman.index');
    }
}
