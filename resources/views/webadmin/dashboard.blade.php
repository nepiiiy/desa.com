
@extends('webadmin.navside')
@section('isi')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav class="me-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <!-- BEGIN -->

   
           <!-- satu baris -->
           <div class="udin d-flex flex-row">

  <!-- Penghargaan -->
  <div class="col-xxl-1 col-md-4 me-3">
    <div class="card info-card revenue-card">
      <div class="card-body">
        <h5 class="card-title"></h5>

        <div class="d-flex align-items-center">
          <div
            class="card-icon rounded-circle d-flex align-items-center justify-content-center"
          >
            <span
              id="boot-icon"
              class="bi bi-person"
              style="font-size: 42px"
            ></span>
          </div>
           <div class="ps-3">
             <a href="/dataadmin"> <h6>Di Tahan</h6> </a>
             <h3>{{ $jumlah_pending }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Penghargaan -->

  
  <!-- Sarana umum -->
  <div class="col-xxl-1 col-md-4">
    <div class="card info-card revenue-card">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="d-flex align-items-center">
          <div
          class="card-icon rounded-circle d-flex align-items-center justify-content-center"
          >
          <span
          id="boot-icon"
          class="bi bi-cart-fill"
          style="font-size: 42px"
          ></span>
        </div>
        <div class="ps-3">
          <a href="/dataadmin"> <h6>Jumlah Desa</h6> </a>
          <h3>{{ $jumlah_data }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Sarana umum -->

</div>
<!-- end satu baris -->

    <!-- enn begis -->
  </section>
</main>
<!-- End #main -->
@endsection