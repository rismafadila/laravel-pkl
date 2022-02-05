@extends('adminlte::page')

@section('title','Pengembalian')

@section('content_header')

<h1>Pengembalian</h1>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Peminjam</label>
                        <input type="text" name="id_pinjam" value="{{ $pengembalian->peminjaman->nama }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="number" name="qty" value="{{$pengembalian->qty}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal kembali</label>
                        <input type="date" name="tgl_kembali" value="{{$pengembalian->tgl_kembali}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{route('pengembalian.index')}}" class="btn btn-block btn-primary">Kembali</a>
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


