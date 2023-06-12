@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <h2 style="color: white">Hello, {{ auth()->user()->name }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>

        <!-- Carousel -->
        <div class="container-fluid carousel-contain py-5">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide col-lg-8 offset-lg-2" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/cleanspt3.jpg') }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/spt3.jpg') }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/deliv2.jpg') }}" class="d-block w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Carousel -->
        
        <!-- Bagian header -->
    <header id="newsletter">
        <h1 bold>Apa itu Shoeshine</h1>
        <nav>
            <p>Shoeshine adalah bisnis penyedia layanan cuci sepatu yang berbasis web. Kami menyediakan layanan profesional untuk membersihkan, merawat, dan mempercantik sepatu Anda. Dengan menggunakan teknik dan bahan-bahan alami yang aman, kami dapat mengembalikan kilau dan keindahan sepatu Anda. Dalam Shoeshine, kami memiliki tim teknisi yang berpengalaman dan terampil untuk menangani berbagai jenis sepatu, baik sneakers, loafers, maupun sepatu kulit. Kami juga menawarkan pelayanan yang cepat, efisien, dan harga yang terjangkau. Anda dapat memesan layanan kami secara online, sehingga lebih praktis dan mudah. Jadi, jika Anda ingin sepatu Anda tetap bersih, terawat, dan selalu tampil maksimal, Shoeshine adalah solusi yang tepat untuk Anda.</p>
        </nav>
        <h1>Keunggulan Shoeshine</h1>
        <nav>
            <p>Shoeshine memiliki beberapa keunggulan yang dapat Anda rasakan, antara lain:</p>
            <ul>
                <li>Shoeshine menyediakan layanan profesional untuk membersihkan, merawat, dan mempercantik sepatu Anda.</li>
                <li>Shoeshine menggunakan teknik dan bahan-bahan alami yang aman, sehingga dapat mengembalikan kilau dan keindahan sepatu Anda.</li>
                <li>Shoeshine memiliki tim teknisi yang berpengalaman dan terampil untuk menangani berbagai jenis sepatu, baik sneakers, loafers, maupun sepatu kulit.</li>
                <li>Shoeshine menawarkan pelayanan yang cepat, efisien, dan harga yang terjangkau.</li>
                <li>Shoeshine menyediakan layanan online, sehingga lebih praktis dan mudah.</li>
            </ul>
        <h1>Service</h1>
        <nav>
            <p>Shoeshine menyediakan beberapa layanan, antara lain:</p>
            <ul>
                <li>Easy Clean</li>
                <li>Medium Clean</li>
                <li>Hard Clean</li>
                <li>Fast Clean</li>
                <li>Leather</li>
                <li>Premium Suede</li>
                <li>Repaint</li>
                <li>Unyellowing</li>
                <li>Repair</li>
            </ul>
        <h1>Testimoni</h1>
    </header>

    <br><br><br>

    <footer id="newsletter">
          <div class="row">
            <div class="col-lg-3">
              <div class="footer-widget">
                <h4>Contact Us</h4>
                <p>Malang - RJ, 22795-008, Indonesia</p>
                <p><a href="#">082361220099</a></p>
                <p><a href="#">shoeshine@company.co</a></p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="footer-widget">
                <h4>About Us</h4>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Pricing</a></li>
                </ul>
                <ul>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Pricing</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="footer-widget">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="#">Free Apps</a></li>
                  <li><a href="#">App Engine</a></li>
                  <li><a href="#">Programming</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">App News</a></li>
                </ul>
                <ul>
                  <li><a href="#">App Dev Team</a></li>
                  <li><a href="#">Digital Web</a></li>
                  <li><a href="#">Normal Apps</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="footer-widget">
                <h4>About Our Company</h4>
                <p>Shoeshine adalah bisnis penyedia layanan cuci sepatu yang berbasis web. Kami menyediakan layanan profesional untuk membersihkan, merawat, dan mempercantik sepatu Anda.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
