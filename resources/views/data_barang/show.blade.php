@extends('adminlte::page')

@section('title','Data Barang')

@section('content_header')

<h1>Data Barang</h1>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Barang</label>
                        <input type="text" name="nama_barang" value="{{$data_barang->nama_barang}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Jumlah</label>
                        <input type="number" name="qty" value="{{$data_barang->qty}}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <input type="text" name="jurusan" value="{{$data_barang->jurusan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{route('barang.index')}}" class="btn btn-block btn-primary">Kembali</a>
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


