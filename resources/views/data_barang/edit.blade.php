@extends('adminlte::page')

@section('title', 'Data Barang')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Data Barang</h1>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('data_barang.update', $data_barang->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Nama barang</label>
                                <input type="text" name="nama_barang" value="{{ $data_barang->nama_barang }}"
                                    class="form-control @error('nama_barang') is-invalid @enderror">
                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="number" name="qty" min="1" value="{{ $data_barang->qty }}"
                                    class="form-control @error('qty') is-invalid @enderror">
                                @error('qty')
                                    <option value="1">*Tidak dapat menggunakan text</option>
                                    {{-- <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> --}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan" value="{{ $data_barang->jurusan }}"
                                    class="form-control @error('jurusan') is-invalid @enderror">
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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
