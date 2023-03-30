@extends('desa.nav')

@section('isi')
<body class="">
<div id="wrapper" class="clearfix">
  <style>
    .content-table {
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      min-width: 1000px;
      border-radius: 5px 5px 0 0;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
  
    .content-table th,
    .content-table td {
      padding: 10px 10px;
    }
  
    .content-table tbody tr.active-row {
      font-weight: bold;
      color: #149DBB;;
    }
    </style>
  <!-- image header -->
  @foreach($profil as $gambar)
  <section class="inner-header divider layer-overlay overlay-dark-8"
      data-bg-img="{{asset('storage/'.$gambar->gambar2)}}">
      @endforeach
    <div class="container pt-200 pb-40">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row"> 
          <div class="col-md-6">
            <h1 class="text-white font-45">PKK</h1>
            <ol class="breadcrumb text-left mt-10 white">
              <li><a href="dashboard-desa.html">Beranda</a></li>
              <li><a href="#">Organisasi</a></li>
              <li class="active" style="color: #fca311;">PKK</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  
      <!-- Section: Causes -->  
      <div style="margin-bottom: 20px;">
        <div class="container">
            <center>
                <img src="https://i.postimg.cc/jdPHWnNW/PKK-Logo-vector-cdr-removebg-preview.png" style="width: 200px; margin-top: 20px;">
                <h3 class="display-5">Struktur PKK</h3>
                <h2 class="display-6 text-uppercase" style="color: #F26522; margin-bottom: 10px;">DESA {{ $data_user[0]->name }}</h2>
                <table class=" table-hover mt-3 content-table">
                  <thead>
                  <tr>
                      <th scope="col" style="width: 10px;">No.</th>
                      <th scope="col" style="text-align: center;">Photo</th>              
                      <th scope="col" style="text-align: center;">Nama</th>              
                      <th scope="col" style="text-align: center;">Jabatan</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($pkk as $pkk)
                        
                  <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td><center><img  style="width: 100px;height: 120px;" src="{{ asset('storage/' . $pkk->gambar) }}" alt=""></center></td>
                      <td><center>{{$pkk->nama}}</center></td>
                      <td><center>{{$pkk  ->jabatans->jabatan}}</center></td>
                  </tr>
                  
                  </tbody>
                  @endforeach

              </table>
        </center>
        </div>
    </div>
<!--END Section: Causes -->
@endsection