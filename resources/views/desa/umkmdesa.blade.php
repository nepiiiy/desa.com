@extends('desa.nav')
@section('isi')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i');

        .shell {
            /* padding: 80px 0; */
        }

        .wsk-cp-product {
            background: #fff;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            position: relative;
            margin: 20px auto;
        }

        .wsk-cp-img {
            position: absolute;
            top: 5px;
            left: 50%;
            transform: translate(-50%);
            -webkit-transform: translate(-50%);
            -ms-transform: translate(-50%);
            -moz-transform: translate(-50%);
            -o-transform: translate(-50%);
            -khtml-transform: translate(-50%);
            width: 100%;
            padding: 15px;
            transition: all 0.2s ease-in-out;
        }

        .wsk-cp-img img {
            width: 100%;
            transition: all 0.2s ease-in-out;
            border-radius: 6px;
        }

        .wsk-cp-product:hover .wsk-cp-img {
            top: -40px;
        }

        .wsk-cp-product:hover .wsk-cp-img img {
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
        }

        .wsk-cp-text {
            padding-top: 45%;
        }

        .wsk-cp-text .category {
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            padding: 5px;
            margin-bottom: 45px;
            position: relative;
            transition: all 0.2s ease-in-out;
        }

        .wsk-cp-text .category>* {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            -khtml-transform: translate(-50%, -50%);

        }

        .wsk-cp-text .category>span {
            padding: 12px 30px;
            border: 1px solid #313131;
            background: #212121;
            color: #fff;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
            border-radius: 27px;
            transition: all 0.05s ease-in-out;

        }

        .wsk-cp-product:hover .wsk-cp-text .category>span {
            border-color: #ddd;
            box-shadow: none;
            padding: 11px 28px;
        }

        .wsk-cp-product:hover .wsk-cp-text .category {
            margin-top: 0px;
        }

        .wsk-cp-text .title-product {
            text-align: center;
        }

        .wsk-cp-text .title-product h3 {
            font-size: 20px;
            font-weight: bold;
            margin-top: 15%;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            width: 100%;
        }

        .wsk-cp-text .description-prod p {
            margin-top: 5%;
            margin-bottom: -2%;
        }

        /* Truncate */
        .wsk-cp-text .description-prod {
            text-align: center;
            width: 100%;
            height: 62px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            margin-bottom: 15px;
        }

        .card-footer {
            padding: 25px 0 5px;
            border-top: 1px solid #ddd;
        }

        .card-footer:after,
        .card-footer:before {
            content: '';
            display: table;
        }

        .card-footer:after {
            clear: both;
        }

        .card-footer .wcf-left {
            float: left;

        }

        .card-footer .wcf-right {
            float: right;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
        }

        a.buy-btn {
            display: block;
            color: #212121;
            text-align: center;
            font-size: 18px;
            width: 35px;
            height: 35px;
            line-height: 35px;
            border-radius: 50%;
            border: 1px solid #212121;
            transition: all 0.2s ease-in-out;
        }

        a.buy-btn:hover,
        a.buy-btn:active,
        a.buy-btn:focus {
            border-color: #FF9800;
            background: #FF9800;
            color: #fff;
            text-decoration: none;
        }

        .wsk-btn {
            display: inline-block;
            color: #212121;
            text-align: center;
            font-size: 18px;
            transition: all 0.2s ease-in-out;
            border-color: #FF9800;
            background: #FF9800;
            padding: 12px 30px;
            border-radius: 27px;
            margin: 0 5px;
        }

        .wsk-btn:hover,
        .wsk-btn:focus,
        .wsk-btn:active {
            text-decoration: none;
            color: #fff;
        }

        .red {
            color: #F44336;
            font-size: 22px;
            display: inline-block;
            margin: 0 5px;
        }

        @media screen and (max-width: 991px) {
            .wsk-cp-product {
                margin: 40px auto;
            }

            .wsk-cp-product .wsk-cp-img {
                top: -40px;
            }

            .wsk-cp-product .wsk-cp-img img {
                box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
            }

            .wsk-cp-product .wsk-cp-text .category>span {
                border-color: #ddd;
                box-shadow: none;
                padding: 11px 28px;
            }

            .wsk-cp-product .wsk-cp-text .category {
                margin-top: 0px;
            }

            a.buy-btn {
                border-color: #FF9800;
                background: #FF9800;
                color: #fff;
            }
        }
    </style>

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
                                    <li><a href="#">Potensi Desa</a></li>
                                    <li class="active">UMKM</li>
                                </ol>
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <!-- Section: Causes -->
            <section id="about">
                <div class="container pb-40">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="text-uppercase line-bottom-center mt-0">UMKM <br><span class="text-uppercase"
                                        style="color: #F26522">DESA {{ $data_u->name }}
                                    </span></h2>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center">
                    <div class="shell">
                        <div class="container">
                            <div class="row multi-row-clearfix">
                                <div class="col-2 col-md-12">
                                    @foreach ($umkm as $product)
                                        <div class="col-md-3 col-sm-4">
                                            <div class="wsk-cp-product">
                                                <div class="wsk-cp-img">
                                                    <img src="/image/{{ $product->image }}" alt="Product" class="img-responsive" style="width: 500px; height: 160px;" />
                                                </div>
                                                <div class="wsk-cp-text">
                                                    <div class="title-product">
                                                        <h3>{{ $product->name }}</h3>
                                                    </div>
                                                    <div class="description-prod">
                                                        <p>{{ $product->detail }}</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="category">
                                                            <button
                                                                style="background-color: rgb(73, 134, 11); border: none; width:50%; height: 40px; border-radius: 10px"><a
                                                                    href="{{ $product->no_tlp }}"
                                                                    style="color:#fff;">Whatsapp
                                                                    Me</a></button>

                                                        </div>
                                                        <div class="category">
                                                            <button
                                                                style="background-color: #f26522; border: none; width:50%; height: 40px; border-radius: 10px;"><a
                                                                    href="{{ $product->link }}" style="color:#fff;">Link
                                                                    Olshop</a></button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                            </div>
                            <div class="d-flex justify-content-center">
                                <center>
                                {{ $umkm->links('pagination::bootstrap-4') }}
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
@endsection
