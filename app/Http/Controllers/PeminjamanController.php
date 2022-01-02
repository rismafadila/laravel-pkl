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
        $peminjamen = Peminjaman::with('barang')->get();
        return view('peminjaman.index', compact('peminjamen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjamen = Peminjaman::all();
        return view('peminjaman.create', compact('peminjamen'));
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

        $peminjamen = new Peminjaman;
        $peminjamen->id_barang = $request->id_barang;
        $peminjamen->nama = $request->nama;
        $peminjamen->telp = $request->telp;
        $peminjamen->qty = $request->qty;
        $peminjamen->tgl_pinjam = $request->tgl_pinjam;
        $peminjamen->save();
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
        $peminjamen = peminjaman::findOrFail($id);
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
        $peminjamen = peminjaman::findOrFail($id);
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

        $peminjamen = new Peminjaman;
        $peminjamen->id_barang = $request->id_barang;
        $peminjamen->nama = $request->nama;
        $peminjamen->telp = $request->telp;
        $peminjamen->qty = $request->qty;
        $peminjamen->tgl_pinjam = $request->tgl_pinjam;
        $peminjamen->save();
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
        $peminjamen = Peminjaman::findOrFail($id);
        $peminjamen->delete();
        return redirect()->route('peminjaman.index');
    }
}
