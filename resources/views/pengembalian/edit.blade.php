@extends('adminlte::page')

@section('title','Pengembalian')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Pengembalian</h1>
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
                   <form action="{{route('pengembalian.update',$pengembalian->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Peminjam</label>
                            <select name="id_pinjam" class="form-control @error('id_pinjam') is-invalid @enderror" >
                                @foreach($pinjam as $data)
                                    <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                            </select>
                            @error('id_pinjam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" name="qty" value="{{$pengembalian->qty}}" class="form-control @error('qty') is-invalid @enderror">
                             @error('qty')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal kembali</label>
                            <input type="date" name="tgl_kembali" value="{{$pengembalian->tgl_kembali}}" class="form-control @error('tgl_kembali') is-invalid @enderror">
                             @error('tgl_kembali')
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


