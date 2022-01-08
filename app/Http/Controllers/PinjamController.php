<?php

namespace App\Http\Controllers;

use App\Models\pinjam;
use App\Models\Barang;

use Illuminate\Http\Request;

class PinjamController extends Controller
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
        $pinjam = pinjam::with('barang')->get();
        return view('pinjam.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pinjam = pinjam::all();
        $barang= Barang::all();
        return view('pinjam.create', compact('pinjam','barang'));
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

        $pinjam = new Pinjam;
        $pinjam->id_barang = $request->id_barang;
        $pinjam->nama = $request->nama;
        $pinjam->telp = $request->telp;
        $pinjam->qty = $request->qty;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->save();
        $barang = Barang::findOrFail($request->id_barang);
        $barang->qty -= $request->qty;
        $barang->save();
        return redirect()->route('pinjam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pinjam = pinjam::findOrFail($id);
        return view('pinjam.show', compact('pinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pinjam = pinjam::findOrFail($id);
        $barang= Barang::all();
        return view('pinjam.edit', compact('pinjam', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pinjam  $pinjam
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

        $pinjam = new pinjam;
        $pinjam->id_barang = $request->id_barang;
        $pinjam->nama = $request->nama;
        $pinjam->telp = $request->telp;
        $pinjam->qty = $request->qty;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->save();
        $barang = Barang::findOrFail($request->id_barang);
        $barang->qty -= $request->qty;
        $barang->save();
        return redirect()->route('pinjam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjam = pinjam::findOrFail($id);
        $pinjam->delete();
        return redirect()->route('pinjam.index');
    }
}
