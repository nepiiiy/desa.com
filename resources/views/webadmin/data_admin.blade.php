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

    a:hover {
      border-color: #ccc;
    }


    pre,
    code {
      display: inline-block;
      padding: .5rem;
      border-radius: .5rem;
      background-color: yellow;
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
  
      color: white;
      padding: 0.4rem 0.8rem;
      border: none;
      border-radius: 0.4rem;
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
      border-radius: .3rem;
      zoom: .8;
    }

    .container {
      position: relative;
      margin: 0 auto;
      width: 100%;
      max-width: 800px;
    }

    .nav {
      position: sticky;
      top: 0;
      padding: 4rem 0 2rem 0;
      z-index: 10;
      background-color: rgba(255, 255, 255, .5);
      backdrop-filter: blur(3px);
    }

    .nav li {
      display: inline-flex;
      padding: 0;
    }

    .nav li a {
      color: white;
      text-decoration: none;
      text-transform: uppercase;
      font-size: .8rem;
      font-weight: 500;
      background-color: #222;
      border-radius: 1rem;
      padding: .2rem .5rem;
      margin: 0 .2rem .4rem;
    }

    .video-wrap {
      border: solid 1px #eee;
      border-radius: 1rem;
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
    <nav >
      <ol class="breadcrumb" style="background-color:;">
        <li class="breadcrumb-item"><a href="/dashwebadmin">Dashboard</a></li>
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
              <button type="submit" class="button-79" style="margin-left: 95%; margin-bottom: 7px;">Cari</button>
            <input type="text" class="form-control mb-3" name="search1" id="search1" placeholder="Cari&hellip;">
            </form>
            <!-- Primary Color Bordered Table -->

    <div >
      <table class="rtr-table" cellpadding="0" cellspacing="0" border="0" bgcolor="#eeeeee" align="left" valign="center"
        width="100%" style="background-color:#d1cfe2">
        <thead >
          <tr>
          <th scope="col">No.</th>
                  <th scope="col">Nama Desa</th>
                  <th scope="col">Provinsi</th>
                  <th scope="col">Kabupaten</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Kode Pos</th>
                  <th scope="col">Foto Surat</th>
                  <th scope="col">Logo desa</th>
                  <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
          <tr>
            <td onclick="" >{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
                  <td>{{$item->provinsi}}</td>                       
                  <td>{{$item->kabupaten}}</td>                       
                  <td>{{$item->kecamatan}}</td>                       
                  <td>{{$item->kode_pos}}</td>                       
                    
                  <!-- <td><img style="margin-left:8px ;" class=""  src="{{ asset('storage/' . $item->logo) }}" width="120px" height="120px" alt=""></td>    -->
                  <td>

<!-- Trigger the modal with a button -->
<a href="#myModal" data-toggle="modal" >Lihat Persetujuan</a>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" >

      <!-- Modal content-->
      <div class="modal-content">
          
          

      <embed src="{{  asset('storage/' . $item->gambar) }}"
                     frameborder="0" width="100%" height="573px" >

          </div>

      </div>
  </div>
<!-- Modal -->
</td>   

                  <td><img style="margin-left: 0px;"  src="{{ asset('storage/' . $item->logo) }}" width="120px" height="120px" alt=""></td>   
                  <td> <a href="{{ route('user.show', $item->id) }}"><button class="btn btn-warning" role="button" ><i class="bi bi-eye-fill"></i></button></a><br>
                    <form action="{{ route('update.status', $item->id) }}" method="post">
                      @csrf
                    <button type="submit" style="font-size: 15px;margin-bottom:7px" class="btn btn-success"><i class="bi bi-check-circle"></i></button>
                    </form>  
                      
                    <a href="#" type="submit" class="button-79 mb-1 delete" style="background-color:red;" data-id="{{ $item->id }}" data-nama="{{ $item->name }}" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                      <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                      </svg></a>
                </tr>
              @endforeach

        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center">
              {{ $data->links('pagination::bootstrap-4') }}
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
              <button type="submit" class="button-79" style="margin-left: 95%; margin-bottom: 7px;">Cari</button>
            <input type="text" class="form-control mb-3" name="search2" id="search1" placeholder="Cari&hellip;">
            </form>

            <!-- Primary Color Bordered Table -->
            <table class="rtr-table" cellpadding="0" cellspacing="0" border="0" bgcolor="#eeeeee" align="left" valign="center"
        width="100%" style="background-color:#d1cfe2">
        <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Desa</th>
                  <th scope="col">Provinsi</th>
                  <th scope="col">Kabupaten</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Kode Pos</th>
                  <th scope="col">Foto Surat</th>
                  <th scope="col">Logo desa</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
        <tbody>
        @foreach ($data2 as $item)
          <tr>
          <td onclick="" >{{$loop->iteration}}</td>
          <td>{{$item->name}}</td>
                <td>{{$item->provinsi}}</td>
                <td>{{$item->kabupaten}}</td>
                <td>{{$item->kecamatan}}</td>
                <td>{{$item->kode_pos}}</td>
                
                <td>
                <a href="#myModal" data-toggle="modal" >Lihat Persetujuan</a>
            </td>


                <td><img style="margin-left:8px ;" class=""  src="{{ asset('storage/' . $item->logo) }}" width="120px" height="120px" alt=""></td>   
                <td> <a href="{{ route('user.show', $item->id) }}"><button style="font-size: 15px;" class="button-79 ms-0 mb-3" role="button">Lihat</button></a>
                  <a href="#" data-id="{{ $item->id }}" data-nama="{{ $item->name }}" class="delete"><button style="font-size: 15px" class="button-79 ms-0 mb-3" type="submit" role="button">Hapus</button></a>
              </td>
          </tr>
        </tbody>
        <div class="pagination"></div>
            @endforeach
      </table>
            <!-- End Primary Color Bordered Table -->
            <div class="d-flex justify-content-center">
              {{ $data2->links('pagination::bootstrap-4') }}
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

  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" >

        <!-- Modal content-->
        <div class="modal-content">
            
            

        <embed src="{{  asset('storage/' . $item->gambar) }}"
                       frameborder="0" width="100%" height="573px" >

            </div>

        </div>
    </div>
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
