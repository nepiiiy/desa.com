@extends('desa.nav')



@section('isi')
<body class="">
    <div id="wrapper" class="clearfix">
        <!-- Section: Causes -->
        <br>
        <div class="container pb-40">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-16 col-md-offset-0">
                        <h2 class="text-uppercase line-bottom-center mt-0" style="margin-bottom: -20px;">Struktur
                            Lembaga <br><span class="" style="color: #F26522"> DESA {{ $data_user[0]->name }}</span></h2>
                            @foreach ($gambar as $gambar)
                                
                            <img src="{{ asset('storage/' . $gambar->gambar) }}" alt=""
                            title="" style="width: 100%; margin-top: 50px;">
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Section: Causes -->
@endsection
