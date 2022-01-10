@extends('adminlte::page')

@section('title','History')

@section('content_header')

<h1>Laporan</h1>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    History Peminjaman
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($laporan as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $data->pinjam->nama }}</td>
                                <td>{{$data->status}}</td>
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


