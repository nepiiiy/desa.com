@extends('admindesa.navside')
@section('isi')
@include('sweetalert::alert')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Galeri Desa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
          <li class="breadcrumb-item active">Galeri Desa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <a href="tambah_galeri"><button style="margin-left: 15px;margin-bottom: 12px;" type="button" class="button-79">&ensp;Tambah Galeri&ensp; </button></a>

   <section class="section" >
    <div class="row align-items-top mx-auto">
      <div class="col-lg-9 d-flex flex-row">


          @foreach ($data as $row)

        <!-- Card with an image on top -->
        <div class="card me-2 col-4">
            <div class="card" style="margin-bottom: -30px;">
                <img src="{{ asset('storage/' . $row->cover) }}" class="card-img-top" alt="..." style="height: 180px">
            <div class="card-body">
              <h5 class="card-title">{{ $row->judul }}</h5>
              <p class="card-text">{{ $row->tanggal }}</p>
              <div class="d-flex">
              <a href="/tampil/{{ $row->id }}" style="margin-left: 50px;" type="button" class="btn btn-primary btn-sm  ">Edit</a>
              <a href="#" data-id="{{ $row->id }}" data-nama="{{ $row->judul }}" style="margin-left: 8px;" type="button" class="btn btn-primary btn-sm delete">Hapus</a>
            </div>
            </div>
          </div><!-- End Card with an image on top -->
        </div>


                  @endforeach
                              <!-- Card with an image on top -->


        </div>

      </div>
      <br>
      <div class="d-flex justify-content-center">
        {{ $data->links('pagination::bootstrap-4') }}
    </div>
    </section>

  </main><!-- End #main -->

@endsection
@section('script')
    <script>
        $('.delete').click(function() {
            var beritaid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin ?",
                    text: "Kamu akan menghapus Galeri dengan judul " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletegaleri/" + beritaid + ""
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
