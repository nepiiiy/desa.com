@extends('admindesa.navside')
@section('maps')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
@endsection
@section('isi')

@include('sweetalert::alert')
<style>
    #map {
        height: 400px;

        border: 0px solid #ffffff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(101, 95, 83, 0.5);
    }
</style>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profil Desa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item active">Profil Desa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Profil Desa</h5>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <!-- General Form Elements -->
                            <form action="/updateprofildesa/{{ $data->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <div class="card-sa col-12 mb-3 d-flex flex-row">
                                            <div class="col-3 mx-auto">
                                                <label class="d-block fw-bold" for="">Gambar 1</label>
                                                <img src="{{ asset('storage/' . $data->gambar1) }}"
                                                    class="img-fluid rounded-start col-10 mx-auto" alt="..."
                                                    style="border-radius: 6px; width:80%; height: 70%;">
                                                <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;"
                                                    name="gambar1">
                                            </div>
                                            <div class="col-3 mx-auto">
                                                <label for="" class="d-block fw-bold">Gambar 2</label>
                                                <img src="{{ asset('storage/' . $data->gambar2) }}"
                                                    class="img-fluid rounded-start col-10 mx-auto" alt="..."
                                                    style="border-radius: 6px; width:80%; height: 70%;">
                                                <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;"
                                                    name="gambar2">
                                            </div>
                                            <div class="col-3 mx-auto">
                                                <label for="" class="d-block fw-bold">Gambar 3</label>
                                                <img src="{{ asset('storage/' . $data->gambar3) }}"
                                                    class="img-fluid rounded-start col-10 mx-auto" alt="..."
                                                    style="border-radius: 6px; width:80%; height: 70%;">
                                                <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;"
                                                    name="gambar3">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <label for="inputText" class="col-sm-2 col-form-label"><b>Visi Desa :</b></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;" name="visi">{{ $data->visi }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <label for="inputEmail" class="col-sm-2 col-form-label"><b>Misi Desa :</b></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;" name="misi">{{ $data->misi }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"><b>Sejarah Desa :</b></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="editor" name="sejarah" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu...">{!! $data->sejarah !!}</textarea>
                                    </div>
                                </div>
                                <div class="row align-items-top">
                                    <div class="col-lg-12 ">

                                        <!-- Card with an image on left -->
                                        <div class="card-sa mb-3 ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="inputNumber"
                                                        class="col-sm-2 col-form-label"><b>Maps</b></label>
                                                    <div class="d-flex">
                                                        <a href="#" onclick="window.open(googleMapsUrl, '_blank')"><button
                                                            type="button" class="btn btn-primary btn-block mt-1">Klik di
                                                            sini</button></a>
                                                            <br>
                                                        </div>
                                                        <div id="map"></div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div><!-- End Card with an image on left -->

                                    </div>
                                </div>

                        </div>
                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

            </div>
            </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
@section('script')
    <script>
        var map = L.map('map').setView([{{ $data->user->latitude }}, {{ $data->user->longtitude }}], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([{{ $data->user->latitude }}, {{ $data->user->longtitude }}]).addTo(map);
        marker.bindPopup("<b>Desa " + "{{ $data->user->name }}</b>").openPopup();

        var lat = {{ $data->user->latitude }};
        var lng = {{ $data->user->longtitude }};
        var googleMapsUrl = "https://www.google.com/maps?q=" + lat + "," + lng;

        tekan.on('click', function(e) {
            var lat = {{ $data->user->latitude }};
            var lng = {{ $data->user->longtitude }};
            var googleMapsUrl = "https://www.google.com/maps?q=" + lat + "," + lng;
            window.open(googleMapsUrl, '_blank');
        });
    </script>
@endsection
@section('editor')
    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script>
       CKEDITOR.replace('editor');
    </script>
@endsection
