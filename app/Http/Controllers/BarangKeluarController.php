<?php

namespace App\Http\Controllers;

use App\Models\Barang_keluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
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
        $barang_keluar = Barang_keluar::all();
        return view('barang_keluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang_keluar = Barang_keluar::all();
        return view('barang_keluar.create', compact('barang_keluar'));
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
            'qty' => 'required',
            'tgl_keluar' => 'required',

        ]);

        $barang_keluar = new Barang_keluar;
        $barang_keluar->qty = $request->qty;
        $barang_keluar->tgl_keluar = $request->tgl_keluar;
        $barang_keluar->id_barang = $request->id_barang;
        $barang_keluar->save();
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
        $barang_keluar = Barang_keluar::findOrFail($id);
        return view('barang_keluar.show', compact('barang_keluar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang_keluar = Barang_keluar::findOrFail($id);
        return view('barang_keluar.edit', compact('barang_keluar'));
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
            'qty' => 'required',
            'tgl_keluar' => 'required',
            'id_barang' => 'required',
        ]);

        $barang_keluar = Barang_keluar::findOrFail($id);
        $barang_keluar->qty = $request->harga;
        $barang_keluar->tgl_keluar = $request->stok;
        $barang_keluar->id_barang = $request->id_barang;
        $barang_keluar->save();
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
        $barang_keluar = Barang_keluar::findOrFail($id);
        $barang_keluar->delete();
        return redirect()->route('barang_keluar.index');
    }
}
