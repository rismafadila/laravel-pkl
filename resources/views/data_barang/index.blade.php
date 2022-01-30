@extends('adminlte::page')

@section('title','Data Barang')

@section('content_header')

<h1>Data Barang</h1>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Data Barang
                    <a href="{{route('data_barang.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($data_barang as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $data->barang->nama_barang }}</td>
                                <td>{{$data->qty}}</td>
                                <td>
                                    <form action="{{route('data_barang.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('data_barang.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('data_barang.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
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


