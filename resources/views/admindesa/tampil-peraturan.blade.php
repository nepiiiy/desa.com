@extends('admindesa.navside')

@section('isi')
{{-- <head>
    <style>
        a{
            font-size: 15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        a:hover{
            text-decoration: underline;
        }
    </style>
</head> --}}
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Peraturan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item"><a href="data-penduduk.html">Data Peraturan</a></li>
                    <li class="breadcrumb-item active">Edit Peraturan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="col-lg-12 ms-auto me-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Peraturan</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="/updateperaturan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
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
                                <label class="fw-bold">Peraturan</label><br><br>
                                <div class="col-4 mb-2">
                                    <a href="{{asset('storage/'.$data->peraturan)}}" target="_blank" class="clickLink btn btn-success btn-sm">Pratinjau Disini</a> <br><br>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="peraturan" id="peraturan">
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
