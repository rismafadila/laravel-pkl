<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\databarang;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function index()
    {
        //get data from table data_barang
        $data_barang = databarang::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta',
            'data' => $data_barang,
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $data_barang = new databarang();
        $data_barang->nama = $request->nama;
        $time = date('ymd');
        $random = mt_rand(1000, 9999);
        $data_barang->nama_barang = $request->nama_barang;
$data_barang->qty = $request->qty;
$data_barang->jurusan = $request->jurusan;

        $data_barang->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $data_barang,
        ], 201);

    }

    public function show($id)
    {
        $data_barang = databarang::findOrFail($id);
        if ($data_barang) {
            return response()->json([
                'success' => true,
                'message' => 'Show Data Peserta',
                'data' => $data_barang,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Peserta Tidak Ditemukan',
                'data' => [],
            ], 200);
        }

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $data_barang = databarang::findOrFail($id);
        $data_barang->nama_barang = $request->nama_barang;
$data_barang->qty = $request->qty;
$data_barang->jurusan = $request->jurusan;

        $data_barang->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $data_barang,
        ], 201);
    }

    public function destroy($id)
    {
        $data_barang = databarang::findOrFail($id);
        $data_barang->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dihapus',
            'data' => $data_barang,
        ], 200);

    }
}

