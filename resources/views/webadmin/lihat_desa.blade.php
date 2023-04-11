<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="https://i.postimg.cc/SKnd1ZCd/logo-desa2-removebg-preview.png" rel="icon" />
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
  ======================================================== --><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap3.min.css')}}">
        <script src="{{asset('js/jquery.slim.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script> 
        <script>
            $(document).on("click", ".clickLink", function () {
        var fileName = $(this).data('id');
    
        path = "pdfs//"+fileName+"#toolbar=0";  // To Hide Toolbar
        var src = $('#myframe').attr('src'); ;
    
        $(".modal-body #filename").text(fileName);   //sets filename in modal 
        $('.modal-body #myframe').attr('src', path);   //sets src value in  in modal iframe
    
        });
        </script>
     
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="/dashwebadmin" class="logo d-flex align-items-center">
          <img src="https://i.postimg.cc/XvrB6m2Z/logo-desa1-removebg-preview.png" alt="" />
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
          <a href="/dataadmin" ><button class="button-79 ms-0 mb-3 mt-3" role="button" style="width: 130%; height:100%;padding:17%; background-color:#0375b4">Kembali</button></a>&ensp;&ensp;&ensp;
          <li class="nav-item dropdown pe-3">
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
             
              <span class="d-none d-md-block dropdown-toggle ps-2"
                >Admin</span
              > </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
                <h6>Admin Desa</h6>
                <span>Admin Desa</span>
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
    {{-- cdn sweetalert --}}
        <script src="https://code.jquery.com/jquery-3.6.3.slim.js"integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <main id="main" class="main" style="background-color:#0375b4">
    
  <div class="pagetitle">
    <h1 style="color:#fff;">Lihat Data</h1>
    <nav>
      <ol class="breadcrumb" style="color:#fff;">
        <li class="breadcrumb-item"><a href="/dataadmin" style="color:#fff;">Beranda</a></li>
        <li class="breadcrumb-item">Pengguna</li>
        <li class="breadcrumb-item active" style="color:#fff;">Lihat Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    

      <div class="col-xl-8" style="margin-left: 16%;">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Pratinjau</button>
              </li>

              

            </ul>



                <div class="card-body" style="margin-left:5%">
                <div style="" class="tab-pane fade show active profile-overview" id="profile-overview">
                {{-- @dd($data) --}}
                <h5 class="card-title"><center>Data Desa {{ $data->name }}</center></h5>  

                    <div class="row"> <center>
                        <div class="col-md-3" >

                                <img src="{{ asset('storage/' . $data->logo) }}" class="img-thumbnail rounded mx-auto d-block">
                                <!-- <button class="button-79 ms-0 mb-3 mt-4" style="width:100%"role="button"><center>Lihat Persetujuan</center></button> --><br>
                                <a data-toggle="modal"  class="clickLink btn btn-danger"href="#myModal" style="color:#fff; font-size:80%">Lihat Persetujuan</a>
                                <div class="modal fade" id="myModal" role="dialog" >
                                <div class="modal-dialog modal-lg" >
                                <div class="modal-content">
    
    <!-- Modal Header -->
    
    
    <!-- Modal body -->

    
        <embed src="{{  asset('storage/' . $data->gambar) }}"
        frameborder="0" width="100%" height="599px">

    
    <!-- Modal footer -->

    </div>                   
                        </div>

</center> 
             
                <div  ><br><br>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Nama Desa</div>
                  <div class="col-lg-9 col-md-8">: {{ $data->name }}</div>
                </div>

                <div class="row" >
                  <div class="col-lg-3 col-md-4 label">Propinsi</div>
                  <div class="col-lg-9 col-md-8">: {{ $data->provinsi }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Kabupaten</div>
                  <div class="col-lg-9 col-md-8">: {{ $data->kabupaten }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Kecamatan</div>
                  <div class="col-lg-9 col-md-8">: {{ $data->kecamatan }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">: {{ $data->email }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Kesalahan yang ada</div>
                  <div class="col-lg-9 col-md-8" style="text-align:justify " > {!! $data->komen !!}</div>
                </div>

                <div class="row"><br>
                  <div class="col-lg-3 col-md-4 label">Kode Pos</div>
                  <div class="col-lg-9 col-md-8">: {{ $data->kode_pos }}</div>
                </div>
                <form action="/komen/{{ $data->id }}" method="post">
                  @csrf
                  <div class="row"><br>
                    <label for="komen" class="col-lg-3 col-md-4 label">Masukkan
                        Komen</label><br><br>
                        {{-- <div class="col-lg-9 col-md-8"><textarea type="text" id="editor" name="komen" ></textarea></div> --}}
                    <textarea type="text" id="editor" name="komen"></textarea><br>
                </div>
                  <a href="" style="margin-left:87% "><button type="submit" class="button-79 ms-0 mb-3 mt-2" style=" background-color:#0375b4">Kirim</button></a>                
                </form>
                <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>

              </div>
              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

               

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main>
<footer id="footer" class="footer" style="background-color:#0375b4;border-top:none;">
      <div class="copyright" style="color:#fff;">
        &copy; Copyright <strong><span>NiceAdmin</span></strong
        >. All Rights Reserved
      </div>
      <div class="credits" style="color:#fff;">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/" style="color:#fff;">BootstrapMade</a>
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