<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>DESAKITA</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="https://i.postimg.cc/SKnd1ZCd/logo-desa2-removebg-preview.png" rel="icon" />
    <link href="https://i.postimg.cc/SKnd1ZCd/logo-desa2-removebg-preview.png" rel="apple-touch-icon" />

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


    {{-- leaflet --}}

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
      integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
      crossorigin="">
    </script>
      <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
      <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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

  <style>
    #leafletMap-registration {
      height: 430px;
      width: 700px;
      margin-left: -80px;
    
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(101, 95, 83, 0.5);
      /* The height is 400 pixels */
    }
    </style>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="/dataadmin" class="logo d-flex align-items-center">
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
 <!-- End Sidebar-->
@include('sweetalert::alert')
<main id="main" class="main" style="background-color:#0375b4">
    
    <div class="pagetitle">
      <h1 style="color:#fff;">Data Dalam Status pending</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item" style="color:#fff;">Pending</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
    <section class="section profile">
      
        <form action="/editpending/{{$data->id}}" method="POST" enctype="multipart/form-data">
          @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
        <div class="col-xl-7" style="margin-left: 300px;">
  
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
  
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Pratinjau</button>
                </li>
  
                
  
              </ul>
              <div class="tab-content pt-2">
                
                <div style="margin-left: 85px;" class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title" style="font-size:30px; margin-left:-12%"><center><b>Data Desa {{ $data->name }}</b></center></h5>
                  
                  <div class="alert alert-danger" role="alert" style="width: 105%; font-size: 13px; margin-left:-10%;margin-top:-2%"><b style="font-size: 15px;">Kesalahan : </b><div style="margin-left:16%; margin-top:-3%; font-size:13px; text-align:justify">{!!$data->komen!!}</div>
                  
                </div>
                <!-- @if ($errors->any())
                        <div class="alert alert-danger" style="width: 105%; font-size: 13px; margin-left:-10%;margin-top:-2%">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->
                  <div class="col-6"><div style=" margin-left:-20%;"><div class=" label"><center>Logo Desa</center></div><br>
                  <img src="{{asset('storage/'.$data->logo)}}" class="img-thumbnail rounded mx-auto d-block" style=" width:35%">
                  
                  <center><input style="width: 250px;" type="file" class="form-control mt-3 @error('logo') is-invalid @enderror" name="logo" id="gambar"
                                        value="{{ $data->logo }}"> 
                                        @error('logo')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror<center> </div><br>
                                       
                                        <div style=" margin-left:90%; margin-top:-260px;" class="col-12"><div class=" label"><center>Persetujuan Desa</center></div><br><br><br>
                                        <center><a data-toggle="modal"  class="clickLink btn btn-danger"href="#myModal" style="color:#fff; font-size:80%; margin-bottom:29px;">Lihat Persetujuan</a></center>
                                        <div class="modal fade" id="myModal" role="dialog" >
                                <div class="modal-dialog modal-lg" >
                                <div class="modal-content">
                                   <embed src="{{asset('storage/'.$data->gambar)}}"
        frameborder="0" width="100%" height="599px">

    
    <!-- Modal footer -->

    </div>                   
                        </div>
      </div><br>
                    <center><input style="width: 250px; " type="file" class="form-control mt-3 @error('gambar') is-invalid @enderror" name="gambar" id="gambar"
                                        value="{{ $data->gambar }}">@error('gambar')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror</center></div></div><br><br>
                                        
<br>

                  {{-- @dd($data) --}}
                  <div  >
                  <div class="row">
                        <br>
                  
                    <div class="col-lg-3 col-md-4 label ">Nama Desa</div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" style="width: 300px" id="nama" name="name"
                    value="{{ $data->name }}">
                    @error('name')
                      <div class="invalid-feedback" style="margin-left:25%">{{ $message }}</div>
                    @enderror
                  </div>

                  
  
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" style="width: 300px" id="nama" name="email"
                    value="{{ $data->email }}">
                    @error('email')
                      <div class="invalid-feedback" style="margin-left:25%">{{ $message }}</div>
                    @enderror
                  </div>
  
                  <div class="row"><br>
                    <div class="col-lg-3 col-md-4 label">Kode Pos</div>
                    <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" style="width: 300px" id="nama" name="kode_pos"
                    value="{{ $data->kode_pos }}" >
                    @error('kode_pos')
                      <div class="invalid-feedback" style="margin-left:25%">{{ $message }}</div>
                    @enderror
                  </div>
              <div style="" id="leafletMap-registration"></div>

                  
                  <input type="hidden" value="{{ $data->latitude }}" name="latitude"  id="latitude">
                  <input type="hidden" value="{{ $data->longtitude }}" name="longtitude" id="longtitude">
                  
                </div>
              </div>
              <div style="margin-left:85%"><button class="button-79 ms-0 mb-3" type="submit" role="button" style="background-color:#0375b4; ">Kirim</button></div>
  
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
<footer id="footer" class="footer" style="background-color:#0375b4; border-top:none;">
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

<script>

  let lat = {{$data->latitude}}
  let lng = {{$data->longtitude}}

  
  // you want to get it of the window global
  const providerOSM = new GeoSearch.OpenStreetMapProvider();

  //leaflet map
  var leafletMap = L.map('leafletMap-registration', {
  fullscreenControl: true,
  // OR
  fullscreenControl: {
      pseudoFullscreen: false // if true, fullscreen to page width and height
  },
  minZoom: 5
  }).setView([lat, lng], 15);
  var marker = L.marker([lat, lng]).addTo(leafletMap);
  leafletMap.on('click', function(e) {
  // Menghapus marker
  leafletMap.removeLayer(marker);
});

  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(leafletMap);
  
  let theMarker = {};

  leafletMap.on('click',function(e) {
      let latitude  = e.latlng.lat.toString().substring(0,15);
      let longitude = e.latlng.lng.toString().substring(0,15);
      // document.getElementById("latitude").value = latitude;
      // document.getElementById("longitude").value = longitude;
      let popup = L.popup()
          .setLatLng([latitude,longitude])
          .setContent("Kordinat : " + latitude +" - "+  longitude )
          .openOn(leafletMap);

      if (theMarker != undefined) {
          leafletMap.removeLayer(theMarker)
      }
      
      theMarker = L.marker([latitude,longitude]).addTo(leafletMap);  

      document.querySelector("#longtitude").value = longitude;
      document.querySelector("#latitude").value = latitude;
  });

  
  var search = new GeoSearch.GeoSearchControl({
      provider: providerOSM,
      style: 'bar',
      showMarker: false,
      autoClose: true,
      retainZoomLevel: false,
      searchLabel: 'Cari....',
  });leafletMap.addControl(search);
</script>
</body>
</html>
