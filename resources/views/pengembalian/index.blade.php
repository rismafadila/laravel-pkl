@extends('adminlte::page')

@section('title','Pengembalian')

@section('content_header')

<b><h1>Pengembalian</h1></b>

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

                    <a href="{{route('pengembalian.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Peminjam</th>
                                 <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Tanggal Kembali</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($pengembalian as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $data->pinjam->nama }}</td>
                                <td>{{ $data->data_barang->nama_barang }}</td>
                                <td>{{$data->qty}}</td>
                                <td>{{$data->tgl_kembali}}</td>
                                <td>
                                    <form action="{{route('pengembalian.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        {{-- <a href="{{route('pengembalian.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('pengembalian.show',$data->id)}}" class="btn btn-outline-warning">Show</a> --}}
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


