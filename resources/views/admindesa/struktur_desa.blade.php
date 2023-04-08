@extends('admindesa.navside')
@section('isi')
@include('sweetalert::alert')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Struktur Desa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Kelembagaan</a></li>
                    <li class="breadcrumb-item active"><a href="/struktur_desa">Struktur Desa</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12 ms-auto me-auto">

                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Struktur Desa</h5>
                            {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                            <!-- Primary Color Bordered Table -->
                            <form action="/updatestrukturdesa" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-bordered border-primary">
                                    <label for="inputNanme4" class="form-label fw-bold">Contoh</label>
                                    <div class="col-4 mb-2">
                                        
                                        <img src="{{ asset('storage/' . $data->gambar) }}" alt=""
                                            title="" width="200px"> <br><br>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputNanme4" class="form-label fw-bold">Upload Gambar Struktur</label>
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar">
                                        @error('gambar')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </table>
                                <!-- End Primary Color Bordered Table -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary" style="margin-left: 90%;">Simpan</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main><!-- End #main -->
@endsection
