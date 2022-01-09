@extends('adminlte::page')

@section('title','Peminjaman')

@section('content_header')

<h1>Peminjaman</h1>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Barang</label>
                        <input type="text" name="id_barang" value="{{ $pinjam->barang->nama_barang }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Nama</label>
                        <input type="text" name="nama" value="{{$pinjam->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> No Telp</label>
                        <input type="number" name="telp" value="{{$pinjam->telp}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Jumlah</label>
                        <input type="number" name="qty" value="{{$pinjam->qty}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal pinjam</label>
                        <input type="date" name="tgl_pinjam" value="{{$pinjam->tgl_pinjam}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{route('pinjam.index')}}" class="btn btn-block btn-primary">Kembali</a>
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


