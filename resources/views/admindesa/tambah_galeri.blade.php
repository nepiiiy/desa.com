    @extends('admindesa.navside')
    @section('isi')
        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Tambah Galeri</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                        <li class="breadcrumb-item"><a href="galeri">Galeri</a></li>
                        <li class="breadcrumb-item">Tambah Galeri</li>
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
                            <h5 class="card-title">Tambah Galeri</h5>

                            <!-- Vertical Form -->
                            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data"
                                class="row g-3">
                                @csrf


                                <div class="col-12">
                                    <label for="judul" class="form-label fw-bold">Judul</label>
                                    <input type="text" value="{{ old('judul') }}" name="judul"
                                        class="form-control @error('judul') is-invalid @enderror" id="judul">
                                    @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="tanggal" class="form-label fw-bold">Tanggal</label>
                                    <input type="date" value="{{ old('tanggal') }}"name="tanggal"
                                        class="form-control @error('tanggal') is-invalid @enderror" id="tanggal">
                                    @error('tanggal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn col-12">
                                                <p class="mb-0 fw-bold">Masukkan Gambar</p>
                                                <p style="color:red" class="mb-0">(minimal 1 & maksimal 12)</p>
                                                <input name="gambar[]" type="file" multiple="" data-max_length="20"
                                                    class="upload__inputfile form-control">
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap"></div>
                                    </div>
                                </div>
                                <label>
                                    <p class="mb-0 fw-bold">Masukkan Cover</p>
                                    <div class="input-group mb-3">
                                        <input type="file" value="{{ old('cover') }}"
                                            class="form-control @error('cover') is-invalid @enderror" name="cover"
                                            id="cover">
                                        @error('cover')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </label>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                </div>
                            </form><!-- Vertical Form -->
                            @if (Session::has('error'))
                                <script>
                                    swal({
                                        title: "Error!",
                                        text: "{{ session('error') }}",
                                        type: "error",
                                        confirmButtonText: "OK"
                                    });
                                </script>
                            @endif
                            <a href="berita.html"> <button type="submit" class="btn btn-danger">Kembali</button></a>

                        </div>
                    </div>


                </div>
                </div>
            </section>

            <script>
                jQuery(document).ready(function() {
                    ImgUpload();
                });

                function ImgUpload() {
                    var imgWrap = "";
                    var imgArray = [];
                    $('.upload__inputfile').each(function() {
                        $(this).on('change', function(e) {
                            imgWrap = $(this).closest('.upload_box').find('.upload_img-wrap');
                            var maxLength = $(this).attr('data-max_length');

                            var files = e.target.files;
                            var filesArr = Array.prototype.slice.call(files);
                            var iterator = 0;
                            filesArr.forEach(function(f, index) {

                                if (!f.type.match('image.*')) {
                                    return;
                                }

                                if (imgArray.length > maxLength) {
                                    return false
                                } else {
                                    var len = 0;
                                    for (var i = 0; i < imgArray.length; i++) {
                                        if (imgArray[i] !== undefined) {
                                            len++;
                                        }
                                    }
                                    if (len > maxLength) {
                                        return false;
                                    } else {
                                        imgArray.push(f);

                                        var reader = new FileReader();
                                        reader.onload = function(e) {
                                            var html =
                                                "<div class='upload__img-box'><div style='background-image: url(" +
                                                e.target.result + ")' data-number='" + $(
                                                    ".upload__img-close").length + "' data-file='" + f
                                                .name +
                                                "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                            imgWrap.append(html);
                                            iterator++;
                                        }
                                        reader.readAsDataURL(f);
                                    }
                                }
                                // console.log(imgArray);
                            });
                        });
                    });

                    $('body').on('click', ".upload__img-close", function(e) {
                        var file = $(this).parent().data("file");
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i].name === file) {
                                imgArray.splice(i, 1);
                                break;
                            }
                        }
                        $(this).parent().parent().remove();
                    });
                }
            </script>

        </main>
    @endsection
