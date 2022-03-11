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
                    <div class="">
                                    <form action="{{ route('laporan.index') }}" method="post"
                                        style="display: flex;">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Pilih Data</button>

                                        <select name="status" id="" class="form-control">
                                            <option value="0">Belum Dikembalikan</option>
                                            <option value="1">Sudah Dikembalikan</option>
                                        </select>
                                    </form>
                                </div>
                    {{-- <a href="{{route('laporan.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah</a> --}}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Peminjam</th>
                                <th>Status</th>

                            </tr>
                            @php $no=1; @endphp
                            @foreach($laporan as $data)
                            <tr>
                               <th>{{ $no++ }}</th>
                               <td>{{ $data->nama }}</td>
                               <td>{{ $data->status ? 'Sudah Dikembalikan' : 'Belum Dikembalikan' }}
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


