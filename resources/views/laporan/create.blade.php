@extends('adminlte::page')

@section('title','laporan')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Laporan</h1>
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
                <div class="card-header">Data Laporan</div>
                <div class="card-body">
                   <form action="{{route('laporan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <select name="id_data" class="form-control @error('id_data') is-invalid @enderror" >
                                @foreach($data_barang as $data)
                                    <option value="{{$data->id}}">{{$data->nama_barang}}</option>
                                @endforeach
                            </select>
                            @error('id_data')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <select name="id_pinjem" class="form-control @error('id_pinjem') is-invalid @enderror" >
                                @foreach($pinjam as $data)
                                    <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                            </select>
                            @error('id_pinjem')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pinjam</label>
                            <select name="id_pinjem" class="form-control @error('id_pinjem') is-invalid @enderror" >
                                @foreach($pinjam as $data)
                                    <option value="{{$data->id}}">{{$data->tgl_pinjam}}</option>
                                @endforeach
                            </select>
                            @error('id_pinjem')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Kembali</label>
                            <select name="id_kembali" class="form-control @error('id_kembali') is-invalid @enderror" >
                                @foreach($pengembalian as $data)
                                    <option value="{{$data->id}}">{{$data->tgl_kembali}}</option>
                                @endforeach
                            </select>
                            @error('id_kembali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jurusan</label> <br>
                            <input type="radio" name="jurusan" value="RPL" > RPL
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


