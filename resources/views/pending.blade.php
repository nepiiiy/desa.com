<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="/dashwebadmin" class="logo d-flex align-items-center">
          <img src="https://i.postimg.cc/qq1MKvgD/logo-removebg-preview.png" alt="" />
        </a>
      </div>
      <!-- End Logo -->


      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class="nav-item dropdown"></li>

          <li class="nav-item dropdown">
            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages"
            >
              <li class="dropdown-header">
                You have 3 new messages
                <a href="#"
                  ><span class="badge rounded-pill bg-primary p-2 ms-2"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="assets/img/messages-1.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="assets/img/messages-2.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="assets/img/messages-3.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>David Muldon</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="dropdown-footer">
                <a href="#">Show all messages</a>
              </li>
            </ul>
            <!-- End Messages Dropdown Items -->
          </li>
          <!-- End Messages Nav -->

          <li class="nav-item dropdown pe-3">
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
             
              <span class="d-none d-md-block dropdown-toggle ps-2"
                >Desa {{ $data->name }}</span
              > </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
                <h6>Admin Desa {{ $data->name }}</h6>
                <span>Admin Desa {{ $data->name }}</span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <form method="POST" action="{{ route('destroy') }}">
                  @csrf

                  <x-dropdown-link :href="route('destroy')"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      {{ __('Keluar') }}
                  </x-dropdown-link>
              </form>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
  
    
  
        <li class="nav-heading">EDIT</li>
  
       

    
       
  
       
        </li><!-- End Register Page Nav -->
      </ul>
    </aside><!-- End Sidebar-->
@include('sweetalert::alert')
<main id="main" class="main">
    
    <div class="pagetitle">
      <h1>Data Dalam Status pending</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Pending</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
    <section class="section profile">
      
        <form action="/editpending/{{$data->id}}" enctype="multipart/form-data">
          @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
        <div class="col-xl-7" style="margin-left: 300px;">
  
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
  
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>
  
                
  
              </ul>
              <div class="tab-content pt-2">
  
                <div style="margin-left: 120px;" class="tab-pane fade show active profile-overview" id="profile-overview">
                  <div class="alert alert-danger" role="alert" style="width: 450px;">
                    {{$data->komen}}
                  </div>
                  {{-- @dd($data) --}}
                  <h5 class="card-title">Data Desa {{ $data->name }}</h5>
                  <div class="row">
                    
                    <div class="col-lg-3 col-md-4 label ">Comment Admin </div>
                    
                    <textarea class="form-control" style="width:300px;height:100px;"  readonly>{{$data->komen}}</textarea>
                    
                    
                  </div>
                  <div  >
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Desa</div>
                    <input type="text" class="form-control" style="width: 300px" id="nama" name="name"
                    value="{{ $data->name }}">
                    
                  </div>

                  
  
                  <div class="row" >
                    <div class="col-lg-3 col-md-4 label">Provinsi</div>
                    <input type="text" class="form-control" style="width: 300px" id="nama" name="provinsi"
                    value="{{ $data->provinsi }}">
                  </div>
  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kabupaten</div>
                    <input type="text" class="form-control" style="width: 300px" id="nama" name="kabupaten"
                    value="{{ $data->kabupaten }}">
                  </div>
  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kecamatan</div>
                    <input type="text" class="form-control" style="width: 300px" id="nama" name="kecamatan"
                    value="{{ $data->kecamatan }}">
                  </div>
  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <input type="text" class="form-control" style="width: 300px" id="nama" name="email"
                    value="{{ $data->email }}">
                  </div>
  
                  <div class="row"><br>
                    <div class="col-lg-3 col-md-4 label">Kode Pos</div>
                    <input type="text" class="form-control" style="width: 300px" id="nama" name="kode_pos"
                    value="{{ $data->kode_pos }}">
                  </div>
  
                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Gambar Persetujuan Desa</div>
                    <div class="col-lg-9 col-md-8" style="margin-top: 40px; margin-right: 60px;"><iframe src="{{  asset('storage/' . $data->gambar) }}" width="100%" height="600px"></iframe></div>
                    <input style="width: 430px;margin-left:20px" type="file" class="form-control mt-3" name="gambar" id="gambar"
                                        value="{{ $data->gambar }}">
                  </div>
  
                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Logo Desa</div>
                    <div class="col-lg-9 col-md-8" style="margin-top: 40px; margin-right: 60px;"><img style="height:450px;width:450px;" src="{{ asset('storage/' . $data->logo) }}" alt=""></div>
                    <input style="width: 430px;margin-left:20px" type="file" class="form-control mt-3" name="logo" id="gambar"
                                        value="{{ $data->logo }}">
                  </div>
                  <button class="button-79 ms-0 mb-3" type="submit" role="button">Kirim</button>
                </div>
                </div>
  
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
  
                 
  
                </div>
  
              </div><!-- End Bordered Tabs -->
  
            </div>
          </div>
  
        </div>
      </form>

      </div>
    </section>
  
  </main><!-- End #main -->


    <script>
        $('.delete').click(function() {
            var dataid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin ?",
                    text: "Kamu akan menghapus data desa dengan nama " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deleteadmin/" + dataid + ""
                        swal("Data berhasil di hapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        })
    </script>
<script src="https://code.jquery.com/jquery-3.6.3.slim.js"integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
<div class="copyright">
&copy; Copyright <strong><span>NiceAdmin</span></strong
>. All Rights Reserved
</div>
<div class="credits">
<!-- All the links in the footer should remain intact. -->
<!-- You can delete the links only if you purchased the pro version. -->
<!-- Licensing information: https://bootstrapmade.com/license/ -->
<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>
</footer>
<!-- End Footer -->

<a
href="#"
class="back-to-top d-flex align-items-center justify-content-center"
><i class="bi bi-arrow-up-short"></i
></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{asset('assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js') }}"></script>
</body>
</html>
