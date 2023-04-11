{{-- @extends('desa.nav')
@section('isi')

<body class="">
    <div id="wrapper" class="clearfix">

        <section class="inner-header divider layer-overlay overlay-dark-8"
            data-bg-img="https://i.postimg.cc/02JFzHcf/ce3a746513e5cfcec3f7fa6e88ef0b391.jpg"">
        <div class=" container pt-200 pb-40">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        @foreach ($data_user as $data_u)
                        <h2 class="text-uppercase text-white font-36">DESA {{ $data_u->name }}</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="dashboard-desa.html">Beranda</a></li>
                            <li class="active" style="color: #fca311;">Galeri Desa</li>
                        </ol>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
    </section>

    <section>
        <div class="container pt-70 pb-40">
            <div class="section-content">
                <div class="row multi-row-clearfix">
                    @foreach ($galeri as $row)
                    <div class="col-sm-6 col-md-4">
                        <div class="event-list bg-silver-light maxwidth500 mb-30">
                            <div class="thumb">
                                <img src="{{ asset('storage/' . $row->cover) }}" alt="" class="img-fullwidth">
                                <div
                                    class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                    <ul>
                                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                                        <li class="font-12 text-white text-uppercase">Feb</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image-box-details text-center p-20 pt-30 pb-30 bg-lighter">
                                <h3 class="title mt-0"><a href="/lihat/{{ $row->id }}/{{ $data_user[0]->id }}">{{
                                        Str::limit($row->judul, 30) }}</a></h3>

                                <a href="/lihatgal/{{ $row->id }}/{{ $data_user[0]->id }}" class="btn btn-colored btn-theme-colored">Lihat Galeri</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </section>

    @endsection --}}


    @extends('desa.nav')
@section('isi')

<body class="">
    <div id="wrapper" class="clearfix">
@foreach($bg as $gambar)
        <section class="inner-header divider layer-overlay overlay-dark-8"
            data-bg-img="{{asset('storage/'.$gambar->gambar1)}}">
            @endforeach
        <div class=" container pt-200 pb-40">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        @foreach ($data_user as $data_u)
                        <h2 class="text-uppercase text-white font-36">DESA {{ $data_u->name }}</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="/dashweb/{{ $data_user[0]->id }}">Beranda</a></li>
                            <li class="active" style="color: #fca311;">Galeri Desa</li>
                        </ol>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
    </section>

            <section id="about">
                <div class="container pb-40">
                    <div class="section-title text-center">
                        <div class="row">
                            @foreach ($data_user as $data_u)
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="text-uppercase line-bottom-center mt-0">Galeri <br><span class="text-uppercase"
                                        style="color: #F26522">DESA {{ $data_u->name }}
                                        @endforeach
                                    </span></h2>
                            </div>
                        </div>
                    </div>


                    <div>
                        <section>

                            <div class="row multi-row-clearfix">
                                @foreach ($galeri as $row)
                                    <div class="col-sm-6 col-md-3" style="margin-top: 30px">
                                        <div class="causes bg-silver-light maxwidth300 mb-30">
                                            <div class="thumb" style="height: 200px;">
                                                <img src="{{ asset('storage/' . $row->cover) }}" alt=""
                                                    class="img-fullwidth">
                                            </div>
                                            <div class="causes-details border-1px bg-white clearfix p-20 pt-10 pb-20">
                                                <h4 class="text-uppercase"><a
                                                        href="/lihatgal/{{ $row->id }}/{{ $data_user[0]->id }}">{{ Str::limit($row->judul, 30) }}</a>
                                                </h4>


                                                <a href="/lihatgal/{{ $row->id }}/{{ $data_user[0]->id }}"
                                                    class="btn btn-default btn-xs font-16 mt-10" style="color: #F26522">Lihat
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </section>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $galeri->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </section>
        </div>
    </body>
@endsection
