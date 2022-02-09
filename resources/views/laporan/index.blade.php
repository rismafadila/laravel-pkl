@extends('adminlte::page')

@section('title','Laporan')

@section('content_header')

<b><h1>Data Laporan</h1></b>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <a href="{{route('laporan.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Nama</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Jurusan</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($laporan as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $data->data_barang->nama_barang }}</td>
                                <td>{{ $data->pinjam->nama }}</td>
                                <td>{{ $data->pinjam->tgl_pinjam }}</td>
                                <td>{{ $data->pengembalian->tgl_kembali }}</td>
                                <td>{{$data->jurusan}}</td>
                                <td>

                                </td>
                            </tr>
                            @endforeach
                        </table>
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


