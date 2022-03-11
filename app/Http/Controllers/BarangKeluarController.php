<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Barang_keluar;
use App\Models\databarang;
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
        $barang_keluar = Barang_keluar::with('data_barang')->get();
        return view('barang_keluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_barang = databarang::all();
        return view('barang_keluar.create', compact('data_barang'));
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
            'qty' => 'required',
            'tgl_keluar' => 'required',
            'keterangan' => 'required',

        ]);

        $barang_keluar = new Barang_keluar;
        $barang_keluar->id_data = $request->id_data;
        $barang_keluar->qty = $request->qty;
        $barang_keluar->tgl_keluar = $request->tgl_keluar;
        $barang_keluar->keterangan = $request->keterangan;
        $barang_keluar->save();
        $data_barang = databarang::findOrFail($request->id_data);
        $data_barang->qty -= $request->qty;
        $data_barang->save();
        Alert::success('Good Job', 'Data saved successfully');
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
        $barangmasuk = Barang::all();
        return view('barang_keluar.edit', compact('barang_keluar', 'barangmasuk'));
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
            'keterangan' => 'required',
        ]);

        $barang_keluar = Barang_keluar::findOrFail($id);
        $barang_keluar->id_barang = $request->id_barang;
        $barang_keluar->qty = $request->qty;
        $barang_keluar->tgl_keluar = $request->tgl_keluar;
        $barang_keluar->keterangan = $request->keterangan;
        $barang_keluar->save();
        Alert::success('Good Job', 'Data edited successfully');
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
        // $barang_keluar = Barang_keluar::findOrFail($id);
        // $barang_keluar->delete();
        // return redirect()->route('barang_keluar.index');
        if (!Barang_keluar::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Success', 'Data deleted successfully');
        return redirect()->route('barang_keluar.index');

    }
}
