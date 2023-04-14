@extends('admindesa.navside')

@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Galeri</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                <li class="breadcrumb-item"><a href="data-penduduk.html">Galeri</a></li>
                <li class="breadcrumb-item active">edit gambar</li>
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
                    <h5 class="card-title">Edit Galeri</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="/tampilgaleri/{{ $data -> id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label fw-bold">Judul</label>
                            <input type="text" class="form-control" id="nama" name="judul" value="{{ $data->judul}}">
                        </div>
                        <div class="col-12 mb-2">
                            <label for="inputEmail4" class="form-label fw-bold">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                value="{{$data->tanggal}}">
                        </div>

                        <label for="defaultFormControlInput" class="form-label mb-3 fw-bold ">Gambar</label>
                        <div class="mb-4 row" style="margin-left: 3%">
                            <?php $key = 0; ?>
                            @if ($data->gambar)
                            <div class="row">
                                @foreach (json_decode($data->gambar) as $gambar)
                                <div class="col-4">
                                    <img src="{{ asset('storage/imggaleri/'.$gambar) }}" alt="" width="210px"
                                        height="200px" class="my-3">
                                    <input type="file" name="gambar[{{ $key++ }}]" class="form-control w-75"
                                        id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                        value="{{ $data->judul }}" />
                                    <button type="button" class="btn btn-danger delete-image-btn"
                                        name="hapus_gambar" value="{{ $key - 1 }}" >&ensp;&ensp;<i
                                            class="bi bi-trash ">&ensp;&ensp;&ensp;Hapus&ensp;Gambar&ensp;&ensp;</i></button>
                                    <input type="hidden" name="hapus_gambar" value="{{ $key - 1 }}">
                                </div>
                                @endforeach
                            </div>
                            @endif


                            <script>
                                const deleteButtons = document.querySelectorAll('.delete-image-btn');
                          deleteButtons.forEach(button => {
                            button.addEventListener('click', e => {
                              const imageName = e.target.getAttribute('data-image');
                              const imageWrapper = e.target.parentNode;

                              imageWrapper.remove();
                              fetch(`/hapus_gambar/${imageName}`, {
                                method: 'DELETE',
                                headers: {
                                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                }
                              });
                            });
                          });
                            </script>
                        </div>
                        <!-- tambahkan input file baru -->
                        <label for="defaultFormControlInput" class="form-label mb-3 fw-bold ">Tambah Gambar</label>
                        <div class="col-4">
                            <input type="file" value="Masukkan Gambar disini" name="gambar[]" class="form-control w-75"
                                id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" multiple />
                        </div>
                        <div></div>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label fw-bold fw-bold">Cover</label><br><br>
                            <img src="{{ asset('storage/' . $data->cover) }}" alt="" title="" width="200px"> <br><br>
                            <div class="col-12">
                                <input type="file" class="form-control" name="cover" id="cover"
                                    value="{{ $data->cover }}">
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form><!-- Vertical Form -->
                    <a href="/galeri"> <button type="submit" class="btn btn-danger"> Kembali</button></a>

                </div>
            </div>


        </div>
        </div>
    </section>

</main>


@endsection
