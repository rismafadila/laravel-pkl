<?php

namespace App\Http\Controllers;

use App\Models\pinjam;
use App\Models\databarang;
use Alert;
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
        $pinjam = pinjam::with('data_barang')->get();
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
        $data_barang= databarang::all();
        return view('pinjam.create', compact('pinjam','data_barang'));
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
            'nama' => 'required',
            'telp' => 'required',
            'stok' => 'required',
            'tgl_pinjam' => 'required',
        ]);

        $pinjam = new Pinjam;
        $pinjam->id_data = $request->id_data;
        $pinjam->nama = $request->nama;
        $pinjam->telp = $request->telp;
        $pinjam->stok = $request->stok;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->save();
        $data_barang = databarang::findOrFail($request->id_data);
        $data_barang->qty -= $request->stok;
        $data_barang->save();
        Alert::success('Good Job','Data saved successfully');
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
        $data_barang= databarang::all();
        return view('pinjam.edit', compact('pinjam', 'data_barang'));
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
            'id_data' => 'required',
            'nama' => 'required',
            'telp' => 'required',
            'stok' => 'required',
            'tgl_pinjam' => 'required',
        ]);

        $pinjam = new Pinjam;
        $pinjam->id_data = $request->id_data;
        $pinjam->nama = $request->nama;
        $pinjam->telp = $request->telp;
        $pinjam->stok = $request->stok;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->save();

        Alert::success('Good Job','Data edited successfully');
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
        // $pinjam = pinjam::findOrFail($id);
        // $pinjam->delete();
        // return redirect()->route('pinjam.index');
        if (!pinjam::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Success', 'Data deleted successfully');
        return redirect()->route('pinjam.index');
    }
}
