@extends('desa.nav')
@section('isi')

    <body class="">
        <div id="wrapper" class="clearfix">

            @foreach ($profil as $gambar)
                <section class="inner-header divider layer-overlay overlay-dark-8"
                    data-bg-img="{{ asset('storage/' . $gambar->gambar1) }}">
            @endforeach
            <div class="container pt-90 pb-40">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            @foreach ($data_user as $data_u)
                                <h2 class="text-uppercase text-white font-36">DESA {{ $data_u->name }}</h2>
                                <ol class="breadcrumb text-left mt-10 white">
                                    <li><a href="/dashweb/{{ $data_user[0]->id }}">Beranda</a></li>
                                    <li><a href="">Potensi Desa</a></li>
                                    <li class="active" style="color: #fca311;">Berita Desa</li>
                                </ol>
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <section id="about">
                <div class="container pb-40">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="text-uppercase line-bottom-center mt-0">Pariwisata <br><span class="text-uppercase"
                                        style="color: #F26522">DESA {{ $data_u->name }}
                                        @endforeach
                                    </span></h2>
                            </div>
                        </div>
                    </div>


                    <div>
                        <section>

                            <div class="row multi-row-clearfix">
                                @foreach ($tour as $row)
                                    <div class="col-sm-6 col-md-3" style="margin-top: 30px">
                                        <div class="causes bg-silver-light maxwidth300 mb-30">
                                            <div class="thumb" style="height: 200px;">
                                                <img src="{{ asset('storage/' . $row->cover) }}" alt="" style="width:100%; height: 100%;"
                                                    class="img-fullwidth">
                                            </div>
                                            <div class="causes-details border-1px bg-white clearfix p-20 pt-10 pb-20" style=" height:180px;">
                                                <h4 class="text-uppercase"><a
                                                        href="/lihatpar/{{ $row->id }}/{{ $data_user[0]->id }}">{{ Str::limit($row->judul, 15) }}</a>
                                                </h4>

                                                <p class="mt-20" style="text-align: justify;">{{ Str::limit($row->alamat, 25  ) }}</p>
                                                <a href="/lihatpar/{{ $row->id }}/{{ $data_user[0]->id }}"
                                                    class="btn btn-default btn-xs font-16 mt-10" style="color: #F26522">Baca
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </section>
                    </div>
                    <div class="d-flex justify-content-center">
                        <center>
                            {{ $tour->links('pagination::bootstrap-4') }}
                        </center>
                    </div>
                </div>
            </section>
        </div>
    </body>
@endsection
