@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Barang</h1>
            </div>
        </div>
    </div>
</div>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Barang</div>
                <div class="card-body">
                   <form action="{{route('barang.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror">
                             @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Jumlah</label>
                            <input type="number" name="qty" class="form-control @error('qty') is-invalid @enderror">
                             @error('qty')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tanggal Masuk</label>
                            <input type="date" name="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror">
                             @error('tgl_masuk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
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


