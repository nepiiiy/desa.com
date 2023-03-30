@extends('admindesa.navside')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/quill.js') }}"></script>
@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Berita</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item"><a href="berita">Berita</a></li>
                    <li class="breadcrumb-item">Tambah Berita</li>
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
                        <h5 class="card-title">Tambah Berita</h5>
                        <form action="{{ route('uploadberita') }}" method="POST" enctype="multipart/form-data"
                            class="row g-3">
                            @csrf
                            <!-- Vertical Form -->
                            <form class="row g-3">
                                <div class="mb-3">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p class="mb-0 fw-bold">Masukkan Gambar</p>
                                                <p style="color:red" class="mb-0">(tidak lebih/kurang dari 3)</p>
                                                <input name="gambar[]" type="file" multiple="" data-max_length="20"
                                                    class="upload__inputfile" required>
                                                    @error('gambar')
                                                    <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                    </span>
                                                  @enderror
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap"></div>
                                    </div>
                                </div>
                                <label>
                                    <p class="mb-0 fw-bold">Masukkan Cover</p>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="cover" id="cover" required min="3" max="3">
                                    </div>
                                </label>
                                <div class="col-12">
                                    <label for="judul" class="form-label fw-bold">Judul Berita</label>
                                    <input type="text" class="form-control" name="judul" id="judul" required min="3" max="3">
                                </div>
                                <div class="col-12">
                                    <label for="subjudul" class="form-label fw-bold">Subjudul Berita</label>
                                    <input type="text" class="form-control" name="subjudul" id="subjudul" required min="3" max="3">
                                </div>
                                <div class="col-12">
                                    <label for="tanggal" class="form-label fw-bold">Tanggal Berita</label>
                                    <input type="date" class="form-control" name="tanggal" id="tanggal" required min="3" max="3">
                                </div>
                                <div class="col-12">
                                    <label for="isi" class="form-label fw-bold">Isi Berita</label>
                                    <textarea class="form-control" id="editor" name="isi" cols="30" rows="10" placeholder="Tuliskan isi berita disini" required min="3" max="3"></textarea>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                </div>
                            </form><!-- Vertical Form -->
                            <a href="berita"> <button type="submit" class="btn btn-danger"> Kembali</button></a>

                    </div>
                </div>


            </div>
            </div>
        </section>

        <script>
            const fileUpload = document.getElementById('gambar');
            const maxFileCount = 5;
            const minFileCount = 1;

            fileUpload.addEventListener('change', function() {
              const selectedFiles = this.files;
              const fileCount = selectedFiles.length;
              if (fileCount > maxFileCount) {
                alert(`Jumlah file yang diunggah terlalu banyak. Maksimal ${maxFileCount} file.`);
                this.value = '';
              } else if (fileCount < minFileCount) {
                alert(`Jumlah file yang diunggah terlalu sedikit. Minimal ${minFileCount} file.`);
                this.value = '';
              }
            });
          </script>
         

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
        <script>
            var quill = new Quill('#editor-container', {
                theme: 'snow'
            });
        </script>


    </main>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      var quill = new Quill('#editor', {
        theme: 'snow'
      });
      $('form').on('submit', function() {
        var content = quill.getContents();
        $('input[name="content"]').val(JSON.stringify(content));
      });
    });
  </script>
@endsection
@section('editor')
    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script>
       CKEDITOR.replace('editor');
    </script>
@endsection
