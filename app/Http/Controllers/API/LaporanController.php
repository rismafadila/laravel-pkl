<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laporan;
class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get data from table data_barang
        $laporan = Laporan::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Laporan',
            'data' => $laporan,
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $laporan = new Laporan();
        $laporan->id_pinjam = $request->id_pinjam;
        $laporan->status = $request->status;
       

        $laporan->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $laporan,
        ], 201);

    }

    public function show($id)
    {
        $laporan = Laporan::findOrFail($id);
        if ($laporan) {
            return response()->json([
                'success' => true,
                'message' => 'Show Data Peserta',
                'data' => $laporan,
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

        $laporan = Laporan::findOrFail($id);
        $laporan->id_pinjam = $request->id_pinjam;
        $laporan->status = $request->status;
       

        $laporan->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $laporan,
        ], 201);
    }

    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dihapus',
            'data' => $laporan,
        ], 200);

    }
}
