@extends('admindesa.navside')
@section('isi')
@include('sweetalert::alert')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Berita Desa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                <li class="breadcrumb-item active">Berita Desa</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <a href="tambah_berita"><button style="margin-left: 15px;margin-bottom: 12px;" type="button"
            class="button-79">&ensp;Tambah Berita&ensp; </button></a>

    <section class="section">
        <div class="row align-items-top mx-auto">
            <div class="col-lg-9 d-flex flex-row">


                @foreach ($data as $row)

                <!-- Card with an image on top -->
                <div class="card me-2 col-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $row->cover) }}" class="card-img-top" alt="..."
                            style="height: 180px">
                        <div class="card-body"> 
                            <h5 class="card-title">{{ Str::limit($row->judul, 20) }}</h5>
                            <p class="card-text" >{{ Str::limit($row->subjudul, 35) }}</p>
                            <div class="d-flex">
                                <a href="/edit/{{ $row->id }}" style="margin-left: 50px;" type="button"
                                    class="btn btn-primary btn-sm  ">Edit</a>
                                <a href="#" data-id="{{ $row->id }}" data-nama="{{ $row->judul }}"
                                    style="margin-left: 8px;" type="button"
                                    class="btn btn-primary btn-sm delete">Hapus</a>
                            </div>
                        </div>
                    </div><!-- End Card with an image on top -->



                    <!-- Card with an image on top -->

                </div>
                @endforeach

                </div>

            </div>
            <div class="d-flex justify-content-center">
                {{ $data->links('pagination::bootstrap-4') }}
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
                    text: "Kamu akan menghapus berita dengan judul " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deleteberita/" + beritaid + ""
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
