@extends('adminlte::page')

@section('title','Pengembalian')

@section('content_header')

<h1>Pengembalian</h1>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Pengembalian
                    <a href="{{route('pengembalian.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Peminjam</th>
                                <th>Qty</th>
                                <th>Tanggal Kembali</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($pengembalian as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $data->pinjam->nama }}</td>
                                <td>{{$data->qty}}</td>
                                <td>{{$data->tgl_kembali}}</td>
                                <td>
                                    <form action="{{route('pengembalian.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('pengembalian.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('pengembalian.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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


