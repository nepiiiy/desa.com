@extends('webadmin.navside')
@section('isi')
@include('sweetalert::alert')
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Fun with table 🏓 | responsive-table-react" />
  <meta property="og:locale" content="en_US" />
  <meta name="description"
    content="Flexible & responsive table for React - A super user-friendly experience, start to use your table also on mobile!" />
  <meta property="og:description"
    content="Flexible & responsive table for React - A super user-friendly experience, start to use your table also on mobile!" />
  <link rel="canonical" href="https://marcogargano.github.io/responsive-table-react/" />
  <meta property="og:url" content="https://marcogargano.github.io/responsive-table-react/" />
  <meta property="og:site_name" content="responsive-table-react" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary" />
  <meta property="twitter:title" content="Fun with table 🏓 | responsive-table-react" />
  <link rel="stylesheet" href="src/components/ResponsiveTable.css">

<link href="{{asset('css/bootstrap1.min.css')}}" rel="stylesheet"/>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap1.min.js')}}"></script>
  <style>
 
    body {
      font-family: "Rubik", sans-serif;
      font-weight: 300;
    }




    pre,
    code {
      display: inline-block;
      padding: .5rem;
    }

    pre {
      display: block;
      max-width: calc(100% - 1rem);
      overflow: scroll;
    }

    small {
      display: inline-block;
    }

    button {
      
      padding: 0.4rem 0.8rem;

    }

    ul {
      padding: 0px 20px;
    }

    li {
      padding: .5rem 0;
    }

    li span {
      width: 160px;
      display: inline-block;
    }

    img.shields {
      zoom: .8;
    }

    .container {
      margin: 0 auto;
      width: 100%;
      max-width: 800px;
    }

    .nav {
      position: sticky;
      top: 0;
      padding: 4rem 0 2rem 0;
      z-index: 10;
    }

    .nav li {
      display: inline-flex;
      padding: 0;
    }

    .nav li a {
      text-decoration: none;
      text-transform: uppercase;
      font-size: .8rem;
      font-weight: 500;
      padding: .2rem .5rem;
      margin: 0 .2rem .4rem;
    }

    .video-wrap {
      overflow: hidden;
    }

    .video-wrap video {
      margin: 0;
      padding: 0;
      width: 100%;
    }

    .table-wrap {
      max-height: 60vh;
      overflow-y: scroll;
    }
  </style>
</head>
<main id="main" class="main" style="background-color:#0375b4">

  <div class="pagetitle" >
    <h1 style="color:#fff;">Data Daftar Admin Desa</h1>
    <nav>
      <ol class="breadcrumb"  style="color:#fff;">
        <li class="breadcrumb-item"><a href="/dashwebadmin"  style="color:#fff;">Dashboard</a></li>
        <li class="breadcrumb-item">Data Admin</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<script></script>
  <section class="section" >
    <div class="row" >
      <div class="col-lg-18 ms-auto me-auto">


        <div class="card"    >
          

          <div class="card-body">
            <h5 class="card-title">Terima Pendaftaran</h5> 
            <form class="form" method="get" action="{{ route('search1') }}">
              <button type="submit" class="button-79" style="margin-left: 95%; margin-bottom: 7px;  background-color:#0375b4">Cari</button>
            <input type="text" class="form-control mb-3" name="search1" id="search1" placeholder="Cari&hellip;" style="">
            </form>
            <!-- Primary Color Bordered Table -->

    <div >
      <table class="rtr-table" cellpadding="0" cellspacing="0"  bgcolor="#eeeeee" align="left" valign="center"
        width="100%" style="background-color:none; ">
        <thead >
          <tr>
          <th scope="col">No.</th>
                  <th scope="col"style="text-align: center;">Nama Desa</th>
                  <th scope="col"style="text-align: center;">Provinsi</th>
                  <th scope="col"style="text-align: center;">Kabupaten</th>
                  <th scope="col"style="text-align: center;">Kecamatan</th>
                  <th scope="col"style="text-align: center;">Kode Pos</th>
                  <th scope="col"style="text-align: center;">Foto Surat</th>
                  <th scope="col"style="text-align: center;">Logo desa</th>
                  <th scope="col"style="text-align: center;">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
          <tr>
            <td onclick="" style=" border: 1px solid black;"><center>{{$loop->iteration}}</center></td>
            <td style=" border: 1px solid black;"><center>{{$item->name}}</center></td>
                  <td style=" border: 1px solid black;"><center>{{$item->provinsi->name}}</center></td>                       
                  <td style=" border: 1px solid black;"><center>{{$item->kabupaten->name}}</center></td>                       
                  <td style=" border: 1px solid black;"><center>{{$item->kecamatan->name}}</center></td>                       
                  <td style=" border: 1px solid black;"><center>{{$item->kode_pos}}</center></td>                       
                    
                  <!-- <td><img style="margin-left:8px ;" class=""  src="{{ asset('storage/' . $item->logo) }}" width="120px" height="120px" alt=""></td>    -->
                  <td style=" border: 1px solid black;">

<!-- Trigger the modal with a button -->
<a href="#modal-atas-{{$item->id}}" data-toggle="modal" ><center>Lihat Persetujuan</center></a>
<div id="modal-atas-{{$item->id}}" class="modal fade" role="dialog"  >
  <div class="modal-dialog modal-lg" >

      <!-- Modal content-->
      <div class="modal-content">
          
          

      <embed src="{{  asset('storage/' . $item->gambar) }}"
                     width="100%" height="599px" >

          </div>

      </div>
  </div>
<!-- Modal -->
</td>   

                  <td><center><img style="margin-left: 0px;"  src="{{ asset('storage/' . $item->logo) }}" width="120px" height="120px" alt=""></center></td>   
                  <td style=" border: 1px solid black; width:165px">
                  <a href="{{ route('user.show', $item->id) }}"><button type="button" class="btn btn-warning"><i class="bi bi-eye"></i></button></a>
                  <form action="{{ route('update.status', $item->id) }}" method="post" style="margin-top:-34px; margin-left:50px">
                  @csrf
                  <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i></button>
                  </form>  
                  <a href="#" data-id="{{ $item->id }}" data-nama="{{ $item->name }}" class="delete"><button type="submit" class="btn btn-danger" style="margin-top:-56px; margin-left:100px"><i class="bi bi-trash"></i></button>                      
                    </td>
                </tr>
              @endforeach

        </tbody>
      </table>
    </div>
    <div >
              <center>{{ $data->links('pagination::bootstrap-4') }}</center>
          </div>
            <!-- End Primary Color Bordered Table -->

          </div>
        </div>


           

  </section>

  <section class="section" style="margin-top: 40px;">
    <div class="row">
      <div class="col-lg-17 ms-auto me-auto">


        <div class="card">

          <div class="card-body">
            <h5 class="card-title">Edit Admin Desa</h5>  
            <form class="form" method="get" action="{{ route('search2') }}">
              <button type="submit" class="button-79" style="margin-left: 95%; margin-bottom: 7px; background-color:#0375b4">Cari</button>
            <input type="text" class="form-control mb-3" name="search2" id="search1" placeholder="Cari&hellip;">
            </form>

            <!-- Primary Color Bordered Table -->
            <table class="rtr-table" cellpadding="0" cellspacing="0" align="left" valign="center"
        width="100%" style="background-color:none;  border: 1px solid black;">
        <thead >
                <tr>
                  <th scope="col" style="text-align: center;">No.</th>
                  <th scope="col" style="text-align: center;">Nama Desa</th>
                  <th scope="col" style="text-align: center;">Provinsi</th>
                  <th scope="col"style="text-align: center;">Kabupaten</th>
                  <th scope="col"style="text-align: center;">Kecamatan</th>
                  <th scope="col"style="text-align: center;">Kode Pos</th>
                  <th scope="col"style="text-align: center;">Foto Surat</th>
                  <th scope="col"style="text-align: center;">Logo desa</th>
                  <th scope="col"style="text-align: center;">Aksi</th>
                </tr>
              </thead>
        <tbody style=" border: 1px solid black;">
        @foreach ($data2 as $item)
          <tr >
          <td onclick=""  style=" border: 1px solid black;"><center>{{$loop->iteration}}</center></td>
          <td style=" border: 1px solid black;"><center>{{$item->name}}</center></td>
                <td style=" border: 1px solid black;"><center>{{$item->provinsi->name}}</center></td>
                <td style=" border: 1px solid black;"><center>{{$item->kabupaten->name}}</center></td>
                <td style=" border: 1px solid black;"><center>{{$item->kecamatan->name}}</center></td>
                <td style=" border: 1px solid black;"><center>{{$item->kode_pos}}</center></td>
                
                <td style=" border: 1px solid black;">
                  <a href="#modal-bawah-{{$item->id}}" data-toggle="modal" ><center>Lihat Persetujuan</center></a>
                  <div id="modal-bawah-{{$item->id}}" class="modal fade" role="dialog" >
                    <div class="modal-dialog modal-lg" >
                
                        <!-- Modal content-->
                        <div class="modal-content">
                            
                            
                
                        <embed src="{{  asset('storage/' . $item->gambar) }}"
                                       frameborder="0" width="100%" height="599px">
                
                            </div>
                
                        </div>
                    </div>
            </td>


                <td><center><img style="margin-left:8px ;" class=""  src="{{ asset('storage/' . $item->logo) }}" width="120px" height="120px" alt=""></center></td>   
                <td style=" border: 1px solid black;">
                <center><a href="{{ route('user.show', $item->id) }}"><button type="button" class="btn btn-warning"><i class="bi bi-eye"></i></button></a>&ensp;
                <a href="#" data-id="{{ $item->id }}" data-nama="{{ $item->name }}" class="delete"> <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button></center>
              </td>
          </tr>
        </tbody>
        <div class="pagination"></div>
            @endforeach
      </table>
            <!-- End Primary Color Bordered Table -->
            <div>
              <center>
              {{ $data2->links('pagination::bootstrap-4') }}
              </center>
          </div>
          <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
    integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
  <script>
    $("#table-bordered").click(function () {
      $(".rtr-table").toggleClass("bordered");
    });
    $("#table-dark").click(function () {
      $(".rtr-table").toggleClass("dark-mode");
    });
    $(".rtr-table tr").click(function () {
      $(this).toggleClass("open");
    });
  </script>
          </div>
        </div>


  </section>

</div>
</div>

</main><!-- End #main -->
@endsection
@section('script')
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
@endsection
