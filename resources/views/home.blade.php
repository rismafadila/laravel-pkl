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
          <p class="card-text">SMK Assalaam didukung oleh sarana praktek yang lengkap UP TO DATE</p>
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
          <p class="card-text">waktu praktek memadai</p>
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
          <p class="card-text">praktek berstandar industri dengan pelayanan prima</p>
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

  <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Follow Us:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/smkassalaam/" class="me-4 text-reset">
        <i class="fab fa-facebook">facebook</i>
      </a>
      <a href="https://twitter.com/smkassalaam/" class="me-4 text-reset">
        <i class="fab fa-twitter">twitter</i>
      </a>
      <a href="https://www.instagram.com/smkassalaam/" class="me-4 text-reset">
        <i class="fab fa-instagram">instragram</i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h5 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-graduation-cap"></i>SMK ASSALAAM
          </h5>
          <p>
           Sekolah kejuruan dengan kompetensi keahlian teknik kendaraan ringan (roda empat)
             plus sepeda motor dalam proses pendidikan pelatihan. Peka terhadap perubahan perkembangan teknologi baru dan
              tuntutan kebutuhan pasar kerja,
            agar lulusannya siap menghadapi perubahan.
          </p>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            KEJURUAN
          </h6>
          <p>
            <a href="#!" class="text-reset">TKRO</a>
          </p>
          <p>
            <a href="#!" class="text-reset">RPL</a>
          </p>
          <p>
            <a href="#!" class="text-reset">TBSM</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-map-marker-alt"></i> Jl. Situtarate - terusan cibaduyut, Kab. Bandung - Jawa Barat</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@smkassalaambandung.sch.id
          </p>
          <p><i class="fas fa-phone me-3"></i> 022 5420-220</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://smkassalaambandung.sch.id/"><b>SMK</b>Assalaam</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
@endsection

@section('css')

@endsection

@section('js')

@endsection
