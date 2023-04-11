@extends('admindesa.navside')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Anggota</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item"><a href="/struktur_pkk">Struktur PKK</a></li>
                    <li class="breadcrumb-item active">Tambah Anggota</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">

            <div class="col-lg-12 ms-auto me-auto">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Anggota</h5>
                        {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                        <!-- Vertical Form -->
                        <form class="row g-3" action="/insertpkk" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="fw-bold">Jabatan</label>
                                <input class="form-control" name="id_jabatan" id="jabatan" disabled
                                    value="{{ $jabatan->jabatan }}">
                            </div>
                            <input type="hidden" name="id_jabatan" value="{{ $jabatan->id }}">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" name="nama">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label class="fw-bold">Gambar</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                        name="gambar" id="gambar">
                                    @error('gambar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </form><!-- Vertical Form -->
                        <a href="/struktur_pkk"> <button type="submit" class="btn btn-danger"> Kembali</button></a>

                    </div>
                </div>


            </div>
            </div>
        </section>

    </main>
@endsection
