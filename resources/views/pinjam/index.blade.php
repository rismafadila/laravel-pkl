@extends('adminlte::page')

@section('title','Peminjaman')

@section('content_header')

<b><h1>Peminjaman</h1></b>

@endsection

@section('js')
<script src="{{asset('js/sweetalert2.js')}}"></script>
<script>
    $(".delete-confirm").click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <a href="{{route('pinjam.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Qty</th>
                                <th>Tanggal Pinjam</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($pinjam as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $data->data_barang->nama_barang }}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->telp}}</td>
                                <td>{{$data->stok}}</td>
                                <td>{{$data->tgl_pinjam}}</td>
                                <td>{{ $data->status ? 'Sudah Dikembalikan' : 'Belum Dikembalikan' }}</td>
                                <td>
                                    <form action="{{route('pinjam.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        {{-- <a href="{{route('pinjam.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('pinjam.show',$data->id)}}" class="btn btn-outline-warning">Show</a> --}}
                                        <button type="submit" class="btn btn-outline-danger delete-confirm" >Delete</button>
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


