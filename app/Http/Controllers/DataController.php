<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\databarang;
use Illuminate\Http\Request;

class DataController extends Controller
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
        $data_barang = databarang::all();
        return view('data_barang.index', compact('data_barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_barang.create');
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
            'nama_barang' => 'required',
            'stok' => 'required',
            'jurusan' => 'required',

        ]);

        $data_barang = new databarang;
        $data_barang->nama_barang = $request->nama_barang;
        $data_barang->stok = $request->stok;
        $data_barang->jurusan = $request->jurusan;
        $data_barang->save();
        return redirect()->route('data_barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_barang = data_barang::findOrFail($id);
        return view('data_barang.show', compact('data_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_barang = data_barang::findOrFail($id);
        $barang= Barang::all();
        return view('data_barang.edit', compact('data_barang', 'barang'));
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
            'qty' => 'required',
            'tgl_keluar' => 'required',

        ]);

        $barang_keluar = Barang_keluar::findOrFail($id);
        $barang_keluar->id_barang = $request->id_barang;
        $barang_keluar->qty = $request->qty;
        $barang_keluar->tgl_keluar = $request->tgl_keluar;
        $barang_keluar->save();
        return redirect()->route('barang_keluar.index');
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