@extends('admindesa.navside')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Penduduk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item"><a href="data-penduduk.html">Data Penduduk</a></li>
                    <li class="breadcrumb-item active">Tambah Penduduk</li>
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
                        <h5 class="card-title">Edit Penduduk</h5>
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
                        <form class="row g-3" action="/updatependuduk/{{ $data->id }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                                    value="{{ $data->nama }}">
                                    @error('nama')
                                <div class="invalid-feedback" >{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-2">
                                <label for="inputEmail4" class="form-label fw-bold">TTL</label>
                                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal"
                                    value="{{ $data->tanggal }}">
                                    @error('tanggal')
                                <div class="invalid-feedback" >{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-floating">
                                    <select class="form-select @error('agama') is-invalid @enderror" id="floatingSelect"
                                        aria-label="Floating label select example" name="agama">
                                        <option selected> {{ $data->agama }} </option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @error('agama')
                                <div class="invalid-feedback" >{{ $message }}</div>
                                @enderror
                                    </select>
                                    <label for="floatingSelect">Pilih Agama Anda</label>
                                </div>

                            </div>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0 fw-bold">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk"
                                            value="Laki-Laki" {{ $data->jk == 'Laki-Laki' ? 'checked' : '' }}>
                                            @error('jk')
                                <div class="invalid-feedback" >{{ $message }}</div>
                                @enderror
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki-Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk"
                                            value="Perempuan" {{ $data->jk == 'Perempuan' ? 'checked' : '' }}>
                                            @error('jk')
                                <div class="invalid-feedback" >{{ $message }}</div>
                                @enderror
                                        <label class="form-check-label" for="gridRadios2">
                                            Perempuan
                                        </label>
                                    </div>

                                </div>
                            </fieldset>

                            <div class="form-floating mb-3">
                                <select class="form-select @error('pendidikan') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example"
                                    name="pendidikan">
                                    <option selected> {{ $data->pendidikan }}</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="Sarjana/D4">Sarjana/D4</option>
                                    <option value="S2">S2</option>
                                    @error('pendidikan')
                                <div class="invalid-feedback" >{{ $message }}</div>
                                @enderror
                                </select>
                                <label for="floatingSelect">Pendidikan Terakhir</label>
                            </div>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0 fw-bold">Sudah Menikah</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="status"
                                            value="Sudah" {{ $data->status == 'Sudah' ? 'checked' : '' }}>
                                            @error('status')
                                <div class="invalid-feedback" >{{ $message }}</div>
                                @enderror
                                        <label class="form-check-label" for="udin1">
                                            Sudah
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="status"
                                            value="Belum" {{ $data->status == 'Belum' ? 'checked' : '' }}>
                                            @error('status')
                                <div class="invalid-feedback" >{{ $message }}</div>
                                @enderror
                                        <label class="form-check-label" for="udin2">
                                            Belum
                                        </label>
                                    </div>

                                </div>
                            </fieldset>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label fw-bold">Alamat</label>
                                <input type="text" class="form-control @error('tanggal') is-invalid @enderror" id="alamat" placeholder="Alamat Rumah"
                                    name="alamat" value=" {{ $data->alamat }}">
                                    @error('alamat')
                                <div class="invalid-feedback" >{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form><!-- Vertical Form -->
                        <a href="/data_penduduk"> <button type="submit" class="btn btn-danger">Kembali</button></a>

                    </div>
                </div>


            </div>
            </div>
        </section>

    </main>
@endsection
