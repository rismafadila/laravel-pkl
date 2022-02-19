<?php

namespace App\Http\Controllers;

use Alert;
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
            'qty' => 'required',
            'jurusan' => 'required',

        ]);

        $data_barang = new databarang;
        $data_barang->nama_barang = $request->nama_barang;
        $data_barang->qty = $request->qty;
        $data_barang->jurusan = $request->jurusan;
        $data_barang->save();
        Alert::success('Good Job', 'Data saved successfully');
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
        // $data_barang = data_barang::findOrFail($id);
        // return view('data_barang.show', compact('data_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data_barang = databarang::findOrFail($id);

        // return view('data_barang.edit', compact('data_barang'));
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
        // $validated = $request->validate([
        //     'nama_barang' => 'required',
        //     'stok' => 'required',
        //     'jurusan' => 'required',

        // ]);

        // $data_barang = databarang::findOrFail($id);
        // $data_barang->nama_barang = $request->nama_barang;
        // $data_barang->stok = $request->stok;
        // $data_barang->jurusan = $request->jurusan;
        // $data_barang->save();
        // Alert::success('Good Job','Data edited successfully');
        // return redirect()->route('data_barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data_barang = databarang::findOrFail($id);
        // $data_barang->delete();
        // return redirect()->route('data_barang.index');

        if (!databarang::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Success', 'Data deleted successfully');
        return redirect()->route('data_barang.index');
    }
}
