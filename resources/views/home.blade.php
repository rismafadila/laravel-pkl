@extends('adminlte::page')

@section('title','home')



@section('content')

<figure class="text-center">
    <blockquote class="blockquote">
      <p><b>INVENTARIS SMK ASSALAAM BANDUNG</b> </p>
    </blockquote>
    <figcaption class="blockquote-footer">
       <cite title="Source Title">Industries Education Based </cite>
    </figcaption>
  </figure>

  {{-- <table>
  <tr>
    <td>
   <div class="card" >
       <img src="{{ asset('assets/img/1.jpg') }}" class="card-img-top" style="width:70%;  height:70%;">
     </div>
   </td>
   <td>
    <div class="card" >
        <img src="{{ asset('assets/img/2.jpg') }}" class="card-img-top" style="width:70%;  height:70%;">
      </div>
    </td>
    <td>
        <div class="card" >
            <img src="{{ asset('assets/img/3.jpg') }}" class="card-img-top" style="width:70%;  height:70%;">
          </div>
        </td>
   </tr>
</table> --}}

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('assets/img/1.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Teknik Bisnis Sepeda Motor</b></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('assets/img/2.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Rekayasa Perangkat Lunak</b></h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('assets/img/3.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Teknik Kendaraan Ringan Otomotif</b></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
  </div>
<hr>
  {{-- <div class="card-group">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div> --}}
@endsection

@section('css')

@endsection

@section('js')

@endsection
