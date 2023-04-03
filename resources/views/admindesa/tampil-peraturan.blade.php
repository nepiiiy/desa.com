@extends('admindesa.navside')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Peraturan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item"><a href="data-penduduk.html">Data Peraturan</a></li>
                    <li class="breadcrumb-item active">Tambah Peraturan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="col-lg-12 ms-auto me-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Peraturan</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="/updateperaturan/{{ $data->id }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label fw-bold">Nomor & Tanggal Penetapan</label>
                                <input type="text" class="form-control" id="nama" name="nomor"
                                    value="{{ $data->nomor }}">
                            </div>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label fw-bold">Tentang</label>
                                <input type="text" class="form-control" id="nama" name="tentang"
                                    value="{{ $data->tentang }}">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="fw-bold">Peraturan</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="peraturan" id="">
                                </div>

                            </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                    </form><!-- Vertical Form -->
                    <a href="/peraturan"> <button type="submit" class="btn btn-danger" style="margin-bottom: 30px; margin-left:20px;">Kembali</button></a>

                </div>
            </div>
        </section>

    </main>
@endsection
@section('editor')
    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
