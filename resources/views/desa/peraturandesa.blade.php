@extends('desa.nav')

@section('isi')

<body class="">  
  <!-- image header -->
  @foreach($profil as $gambar)
  <section class="inner-header divider layer-overlay overlay-dark-8" data-bg-img="{{asset('storage/'.$gambar->gambar1)}}">
    @endforeach
    <div class="container pt-200 pb-40">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row"> 
          <div class="col-md-6">
            <h1 class="text-white font-45">Peraturan Desa</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  
      <!-- Section: Causes -->  
      <div style="margin-bottom: 20px; margin-top: 20px; ">
        <div class="container pt-15 pr-15 pb-20 pl-15" style="background-color: #F6F6F6; border-radius: 10px;">
            <center>
              @foreach($data_user as $data_u)
                <h2 class="text-uppercase line-bottom-center mt-0">PERATURAN<br><span
                        class="" style="color: #F26522">Desa {{ $data_u->name }}</h2>
                        @endforeach
            </center>
            <p>Dalam Peraturan Desa ini yang dimaksud dengan :</p>
            <table style="text-align: justify;">
              @php
                  $no=1;
              @endphp
                <tr>
                    <th style="width: 50px; "> </th>
                    <th > </th>
                </tr>
                @foreach($data as $row)
                <tr>
                    <td >{{$no++}}.</td>
                    <td >{!!$row->peraturan!!}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
<!--END Section: Causes -->
@endsection