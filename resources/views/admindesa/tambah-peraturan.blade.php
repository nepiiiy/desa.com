@extends('admindesa.navside')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Peraturan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item"><a href="data-penduduk.html">Data Peraturan</a></li>
                    <li class="breadcrumb-item active">Tambah Peraturan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                </div>
            </div>
            </div>
            <div class="col-lg-12 ms-auto me-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Peraturan</h5>
                        <!-- Vertical Form -->
                        {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                        <form class="row g-3" action="/insertperaturan" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label fw-bold">Nomor & Tanggal Penetapan</label>
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror"
                                    id="nama" name="nomor">
                                @error('nomor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label fw-bold">Tentang</label>
                                <input type="text" class="form-control @error('tentang') is-invalid @enderror"
                                    id="nama" name="tentang">
                                @error('tentang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label class="fw-bold">Peraturan</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control @error('peraturan') is-invalid @enderror"
                                        name="peraturan" id="gambar">
                                    @error('peraturan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </form><!-- Vertical Form -->
                        <a href="/peraturan"> <button class="btn btn-danger">Kembali</button></a>

                    </div>
                </div>


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
