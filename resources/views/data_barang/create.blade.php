@extends('adminlte::page')

@section('title', 'Data Barang')

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
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form action="{{ route('data_barang.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <input type="text" name="nama_barang"
                                    class="form-control @error('nama_barang') is-invalid @enderror">
                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Stok</label>
                                <input type="number" name="qty" min="1"
                                    class="form-control @error('qty') is-invalid @enderror">
                                {{-- <option value="1">*Tidak dapat menggunakan text</option> --}}
                                @error('qty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="panel-body">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="stok" min="1">
                            <option value="1">*Tidak dapat menggunakan text</option>
                            @error('jumlah') {{ $message }} @enderror
                        </div> --}}
                            <div class="form-group">
                                <label for="">Jurusan</label> <br>
                                <input type="radio" name="jurusan" value="RPL"> RPL
                                <br>
                                <input type="radio" name="jurusan" value="TKRO"> TKRO
                                <br>
                                <input type="radio" name="jurusan" value="TBSM"> TBSM
                                <br>
                                @error('jurusan')
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
