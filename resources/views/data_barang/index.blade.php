@extends('adminlte::page')
@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0"></h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
@include('layouts._flash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    data barang
                    <a href="{{ route('data_barang.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                        </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Stok</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($data_barang as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td>{{ $data->qty }}</td>
                                    <td>{{ $data->jurusan }}</td>




                                    <td>
                                        <form action="{{ route('data_barang.destroy', $data->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ route('data_barang.edit', $data->id) }}" class="btn btn-outline-info">Edit</a>
                                            <a href="{{ route('data_barang.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapusnya')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
<script src="{{ asset('Datatables/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

</script>
@endsection
