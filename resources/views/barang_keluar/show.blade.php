@extends('adminlte::page')

@section('title','Barang Keluar')

@section('content_header')

<h1>Barang Keluar</h1>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Barang</label>
                        <input type="text" name="id_data" value="{{ $barang_keluar->data_barangbarang->nama_barang }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Jumlah</label>
                        <input type="number" name="qty" value="{{$barang_keluar->qty}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Keluar</label>
                        <input type="date" name="tgl_keluar" value="{{$barang_keluar->tgl_keluar}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kondisi</label>
                        <input type="text" name="kondisi" value="{{$barang_keluar->kondisi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{route('barang_keluar.index')}}" class="btn btn-block btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')

@endsection

@section('js')

@endsection


