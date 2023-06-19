@push('css')
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .h2 {
            color: #000;
            font-size: 26px;
            font-weight: 300;
            text-align: center;
            text-transform: uppercase;
            position: relative;
            margin: 30px 0 70px;
        }

        .h2::after {
            content: "";
            width: 100px;
            position: absolute;
            margin: 0 auto;
            height: 4px;
            border-radius: 1px;
            background: #1c47e3;
            left: 0;
            right: 0;
            bottom: -20px;
        }

        .carousel .carousel-item {
            color: #999;
            overflow: hidden;
            min-height: 120px;
            font-size: 13px;
        }

        .carousel .media img {
            width: 80px;
            height: 80px;
            display: block;
            border-radius: 50%;
        }

        .carousel .testimonial {
            padding: 0 15px 0 60px;
            position: relative;
        }

        .carousel .testimonial::before {
            content: "\201C";
            font-family: Arial, sans-serif;
            color: #e2e2e2;
            font-weight: bold;
            font-size: 68px;
            line-height: 54px;
            position: absolute;
            left: 15px;
            top: 0;
        }

        .carousel .overview b {
            text-transform: uppercase;
            color: #1c47e3;
        }

        .carousel .carousel-indicators {
            bottom: -40px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin: 1px 3px;
            box-sizing: border-box;
        }

        .carousel-indicators li {
            background: #e2e2e2;
            border: 4px solid #fff;
        }

        .carousel-indicators li.active {
            color: #fff;
            background: #1c47e3;
            border: 5px double;
        }

        .container-xl {
            margin-top: 100px;
        }

        .carousel-inner {
            margin-top: 50px;
        }
    </style>
@endpush
@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <h2 style="color: white">Testimonials.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="h2">What <b>our customers</b> are saying</h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>"Aku, punya sepatu kulit yang harganya mahal banget. Makanya, aku
                                                        butuh yang ahli buat rawat sepatu kulit aku itu. Tapi untungnya ada
                                                        Shoe Shine. Mereka bener-bener jago dalam rawat sepatu kulit dan
                                                        bikin sepatuku tetap kinclong. Pelayanannya top banget deh! nggak
                                                        ragu rekomen Shoe Shine ke temen dan keluarga."</p>
                                                    <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>"aku, sering banget sepatu kerjaku kena tumpahan dan noda. Tapi Shoe
                                                        Shine ini bener-bener penyelamat deh buat sepatu-sepatu aku.
                                                        Pelayanannya cepet dan efisien banget, bisa bikin sepatu aku balik
                                                        kayak baru lagi. aku banget yang udah jatuh hati sama bantuan mereka
                                                        buat jaga penampilanku yang profesional."</p>
                                                    <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>"aku, suka banget sama sepatu putih. Makanya aku butuh Shoe Shine
                                                        buat jagain sepatu ku biar tetap bersih dan kinclong. Pelayanannya
                                                        yang terjangkau dan hasilnya yang memuaskan bikin aku puas dan
                                                        nyaman banget. Pastinya bakal pake Shoe Shine lagi deh ke depannya."
                                                    </p>
                                                    <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>"Aku, tuh seneng banget deh nemuin Shoe Shine. aku mahasiswa aktif,
                                                        jadi butuh solusi praktis buat jaga sepatu sneakers aku. Nah, Shoe
                                                        Shine ini bener-bener cocok buat aku. Pelayanannya cepet dan
                                                        hasilnya memuaskan banget. Makasih ya, Shoe Shine!"</p>
                                                    <p class="overview"><b>Mary Saveley</b>, Web Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>"Wah, Shoe Shine beneran jago banget deh! Gue, dari Jakarta, cuci
                                                        sepatu di sana rasanya nggak nyesel. Sepatu-sepatu gue yang tadinya
                                                        kotor dan kusam, sekarang keliatan kinclong lagi! Pelayanannya juga
                                                        cepet dan memuaskan. Thanks banget, Shoe Shine!"</p>
                                                    <p class="overview"><b>Martin Sommer</b>, UX Analyst</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>"Saya sangat senang dengan layanan Shoe Shine. Mereka menjemput
                                                        sepatu saya tepat waktu dan mengembalikannya dalam kondisi yang luar
                                                        biasa. Sepatu-sepatu saya terlihat seperti baru setelah dicuci dan
                                                        dirawat dengan hati-hati. Pelayanan pelanggan yang ramah dan harga
                                                        yang terjangkau membuat saya menjadi pelanggan setia Shoe Shine."
                                                    </p>
                                                    <p class="overview"><b>John Williams</b>, Web Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    @endsection
