<!DOCTYPE html>
<html lang="en">
  <head>

    <style>
      .sidebar {
      position: fixed;
      top: 60px;
      left: 0;
      bottom: 0;
      width: 300px;
      z-index: 996;
      transition: all 0.3s;
      padding: 20px;
      overflow-y: auto;
      scrollbar-width: thin;
      scrollbar-color: #aab7cf transparent;
      box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
      background-color: #fff;
    }

    @media (max-width: 1199px) {
      .sidebar {
        left: -300px;
      }
    }

    .sidebar::-webkit-scrollbar {
      width: 5px;
      height: 8px;
      background-color: #fff;
    }

    .sidebar::-webkit-scrollbar-thumb {
      background-color: #aab7cf;
    }

    @media (min-width: 1200px) {

      #main,
      #footer {
        margin-left: 300px;
      }
    }

    @media (max-width: 1199px) {
      .toggle-sidebar .sidebar {
        left: 0;
      }
    }

    @media (min-width: 1200px) {

      .toggle-sidebar #main,
      .toggle-sidebar #footer {
        margin-left: 0;
      }

      .toggle-sidebar .sidebar {
        left: -300px;
      }
    }

    .sidebar-nav {
      padding: 0;
      margin: 0;
      list-style: none;
    }

    .sidebar-nav li {
      padding: 0;
      margin: 0;
      list-style: none;
    }

    .sidebar-nav .nav-item {
      margin-bottom: 5px;
    }

    .sidebar-nav .nav-heading {
      font-size: 11px;
      text-transform: uppercase;
      color: #899bbd;
      font-weight: 600;
      margin: 10px 0 5px 15px;
    }

    .sidebar-nav .nav-link {
      display: flex;
      align-items: center;
      font-size: 15px;
      font-weight: 600;
      color: #4154f1;
      transition: 0.3;
      background: #f6f9ff;
      padding: 10px 15px;
      border-radius: 4px;
    }

    .sidebar-nav .nav-link i {
      font-size: 16px;
      margin-right: 10px;
      color: #4154f1;
    }

    .sidebar-nav .nav-link.collapsed {
      color: #012970;
      background: #fff;
    }

    .sidebar-nav .nav-link.collapsed i {
      color: #899bbd;
    }

    .sidebar-nav .nav-link:hover {
      color: #4154f1;
      background: #f6f9ff;
    }

    .sidebar-nav .nav-link:hover i {
      color: #4154f1;
    }

    .sidebar-nav .nav-link .bi-chevron-down {
      margin-right: 0;
      transition: transform 0.2s ease-in-out;
    }

    .sidebar-nav .nav-link:not(.collapsed) .bi-chevron-down {
      transform: rotate(180deg);
    }

    .sidebar-nav .nav-content {
      padding: 5px 0 0 0;
      margin: 0;
      list-style: none;
    }

    .sidebar-nav .nav-content a {
      display: flex;
      align-items: center;
      font-size: 14px;
      font-weight: 600;
      color: #012970;
      transition: 0.3;
      padding: 10px 0 10px 40px;
      transition: 0.3s;
    }

    .sidebar-nav .nav-content a i {
      font-size: 6px;
      margin-right: 8px;
      line-height: 0;
      border-radius: 50%;
    }

    .sidebar-nav .nav-content a:hover,
    .sidebar-nav .nav-content a.active {
      color: #4154f1;
    }

    .sidebar-nav .nav-content a.active i {
      background-color: #4154f1;
    }
    </style>


    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>DESA.COM</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="https://i.postimg.cc/SKnd1ZCd/logo-desa2-removebg-preview.png" rel="shortcut icon" type="image/png">

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
      {{-- Maps leaflet --}}
      @yield('maps')

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
        <a href="dashboardadmindesa" class="logo d-flex align-items-center">
          <img src="https://i.postimg.cc/XvrB6m2Z/logo-desa1-removebg-preview.png" alt="" />
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
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

              <b><h7 class="d-none d-md-block dropdown-toggle ps-2"
                >@if(Auth::check())
               Desa {{ Auth::user()->name }} &ensp;</h7></b>
            @endif
               </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
                @if(Auth::check())
                <h6>{{ Auth::user()->name }}</h6>
            @endif
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

        <li class="nav-item">
        <a class="nav-link {{ Request::is('dashdesa') ? '' : 'collapsed' }}" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
              </svg>
            <span>&ensp;&ensp;Kembali</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboardadmindesa') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-grid me-3" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
              </svg>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->

        <li class="nav-heading">EDIT</li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('profil_desa') ? '' : 'collapsed' }}" href="{{ route('profil_desa') }}">
            <svg console.log(object); xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house-door me-2" viewBox="0 0 16 16">
              <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
            </svg>
            <span>Profile Desa</span>
          </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
          <a class="nav-link {{ Request::is('struktur_desa') ? '' : 'collapsed' }}  show" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-diagram-3-fill me-3" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z"/>
            </svg>
          </i><span>Lembaga</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse">
            <li>
              <a class="nav-link {{ Request::is('struktur_desa') ? '' : 'collapsed' }}   "href="{{ route('struktur_desa') }}">
                <i class="bi bi-circle"></i><span>Struktur Desa</span>
              </a>
            </li>
            <li>
              <a class="nav-link {{ Request::is('struktur_karang') ? '' : 'collapsed' }}"href="{{ route('struktur_karang') }}">
                <i class="bi bi-circle"></i><span>Struktur Karang Taruna</span>
              </a>
            </li>
            <li>
              <a class="nav-link {{ Request::is('struktur_pkk') ? '' : 'collapsed' }}" href="{{ route('struktur_pkk') }}">
                <i class="bi bi-circle"></i><span>Struktur PKK</span>
              </a>
            </li>

          </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
          <a class="nav-link {{ Request::is('data_penduduk') ? '' : 'collapsed' }}" href="{{ route('data_penduduk') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person me-3" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
            </svg>
            <span>Data Penduduk</span>
          </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
          <a class="nav-link {{ Request::is('peraturan') ? '' : 'collapsed' }}" href="peraturan">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-card-list me-3" viewBox="0 0 16 16">
              <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
              <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
            </svg>
            <span>Peraturan Desa</span>
          </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
          <a class="nav-link {{ Request::is('pariwisata') && Request::is('pariwisata') ? '' : 'collapsed' }} " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-currency-bitcoin me-3" viewBox="0 0 16 16">
              <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
            </svg></i><span>Potensi Desa</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="{{ route('products.index') }}">
                <i class="bi bi-circle"></i><span>UMKM</span>
              </a>
            </li>
            <li>
              <a href="{{ route('pariwisata') }}">
                <i class="bi bi-circle"></i><span>Pariwisata</span>
              </a>
            </li>

          </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
          <a class="nav-link {{ Request::is('berita') ? '' : 'collapsed' }}" href="{{ route('berita') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-newspaper me-3" viewBox="0 0 16 16">
              <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
              <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
            </svg>
            <span>Berita Desa</span>
          </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('penghargaan') ? '' : 'collapsed' }}" href="{{ route('penghargaan') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trophy me-3" viewBox="0 0 16 16">
              <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
            </svg>
            <span>Penghargaan Desa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('sarana_umum') ? '' : 'collapsed' }}" href="{{route('sarana_umum') }}">
            <span
                                id="boot-icon"
                                class="bi bi-globe"
                                style="font-size: 20px"
                              ></span>
              <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
            </svg>
            <span>&ensp;&ensp;Sarana</span>
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('galeri') ? '' : 'collapsed' }}" href="{{ route('galeri') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                  </svg>
              <span>&ensp;&ensp;Galeri</span>
            </a>
          </li>
        <!-- End Register Page Nav -->
      </ul>
    </aside><!-- End Sidebar-->
@yield('isi')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Desa Web</span></strong
        >. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js"integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{('assets/js/main.js')}}"></script>

     {{-- cdn sweetalert --}}
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     @yield('script')
     @yield('editor')
     {{-- jquery cdn sweetalert --}}



  </body>
</html>
