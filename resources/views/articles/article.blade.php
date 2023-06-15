
<style>
    // Colors
$color-primary-white: rgb(240, 240, 240);

main {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 50px;
  font-family: 'Roboto', sans-serif;
}

.card-article {
  width: 15rem;
  height: 25rem;
  border-radius: 10px;
  overflow: hidden;
  cursor: pointer;
  position: relative;
  margin-top: 50px;
  margin-bottom: 20px;
  color: $color-primary-white;
}
 
  .img {
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0.9;
    transition: opacity .2s ease-out;
  }

  .h2 {
    position: absolute;
    inset: auto auto 30px 30px;
    margin: 0;
    transition: inset .3s .3s ease-out;
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: normal;
    text-transform: uppercase;
  }
  
  .p, .a {
    position: absolute;
    opacity: 0;
    max-width: 80%;
    transition: opacity .3s ease-out;
  }
  
  .p {
    inset: auto auto 80px 30px;
  }
  
  .a {
    inset: auto auto 40px 30px;
    color: inherit;
    text-decoration: none;
  }
  
  .main-1:hover #h2-1 {
    inset: auto auto 220px 30px;
    transition: inset .3s ease-out;
  }
  
  .main-1:hover #p-1, .main-1:hover #a-1 {
    opacity: 1;
    transition: opacity .5s .1s ease-in;
  }
  
  .main-1:hover #img-1 {
    transition: opacity .3s ease-in;
    opacity: 1;
  }

  .main-2:hover #h2-2 {
    inset: auto auto 220px 30px;
    transition: inset .3s ease-out;
  }
  
  .main-2:hover #p-2, .main-2:hover #a-2 {
    opacity: 1;
    transition: opacity .5s .1s ease-in;
  }
  
  .main-2:hover #img-2 {
    transition: opacity .3s ease-in;
    opacity: 1;
  }

  .main-3:hover #h2-3 {
    inset: auto auto 220px 30px;
    transition: inset .3s ease-out;
  }
  
  .main-3:hover #p-3, .main-3:hover #a-3 {
    opacity: 1;
    transition: opacity .5s .1s ease-in;
  }
  
  .main-3:hover #img-3 {
    transition: opacity .3s ease-in;
    opacity: 1;
  }

  .main-4:hover #h2-4 {
    inset: auto auto 220px 30px;
    transition: inset .3s ease-out;
  }
  
  .main-4:hover #p-4, .main-4:hover #a-4 {
    opacity: 1;
    transition: opacity .5s .1s ease-in;
  }
  
  .main-4:hover #img-4 {
    transition: opacity .3s ease-in;
    opacity: 1;
  }


.material-symbols-outlined {
  vertical-align: middle;
}
</style>
@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <h2 style="color: white" class="text-decoration-none">Hello, {{ auth()->user()->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="row">
          <div class="col-md-3">
            <a href="article/1" class="text-decoration-none" >
              <main class="main-1">
                <div class = "card-article">
                  <img class="img" id="img-1" src="{{asset('/assets/img/tokospt1.jpg')}}" alt="">
                  <div class="card-content">
                    <h2 class="h2" id="h2-1" style="color:white">
                      Tips Menjaga Sepatu Tetap Putih dan Bebas Kuning
                    </h2>
                    <p class="p" id="p-1" style="color:white">
                      Memiliki sepatu putih yang bersih dan terawat adalah impian bagi banyak orang.
                    </p>
                    <a href="#" class="button a" id="a-1">
                      Find out more 
                      <span class="material-symbols-outlined">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
              </main>
            </a>
          </div>
          <div class="col-md-3">
            <a href="article/2" class="text-decoration-none">
              <main class="main-2">
                <div class = "card-article">
                  <img class="img" id="img-2" src="{{asset('/assets/img/deliv1.jpg')}}" alt="">
                  <div class="card-content">
                    <h2 class="h2" id="h2-2" style="color:white">
                      Praktis dan Efisien: Panduan Memesan Layanan Cuci Sepatu Online
                    </h2>
                    <p class="p" id="p-2" style="color:white">
                      Dengan memesan layanan cuci sepatu online, Anda dapat merawat sepatu dengan mudah dan efisien tanpa harus pergi ke tempat laundry fisik. 
                    </p>
                    <a href="#" class="button a" id="a-2">
                      Find out more 
                      <span class="material-symbols-outlined">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
              </main>
            </a>
          </div>

          <div class="col-md-3">
            <a href="article/3" class="text-decoration-none">
              <main class="main-3">
                <div class = "card-article">
                  <img class="img" id="img-3" src="{{asset('/assets/img/spt1.jpg')}}" alt="">
                  <div class="card-content">
                    <h2 class="h2" id="h2-3" style="color:white">
                      Menemukan Gaya yang Tepat: Mengenal Berbagai Model Sepatu
                    </h2>
                    <p class="p" id="p-3" style="color:white">
                      Pilihan model sepatu sangat penting dalam menciptakan tampilan yang tepat dan sesuai dengan kesempatan.
                    </p>
                    <a href="#" class="button a" id="a-3">
                      Find out more 
                      <span class="material-symbols-outlined">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
              </main>
            </a>
          </div>

          <div class="col-md-3">
            <a href="article/4" class="text-decoration-none">
              <main class="main-4">
                <div class = "card-article">
                  <img class="img" id="img-4" src="{{asset('/assets/img/cleanspt.jpg')}}" alt="">
                  <div class="card-content">
                    <h2 class="h2" id="h2-4" style="color:white">
                      Tips Membersihkan Sepatu Secara Mandiri di Rumah
                    </h2>
                    <p class="p" id="p-4" style="color:white">
                      Merawat kebersihan sepatu adalah langkah penting dalam mempertahankan penampilan dan daya tahan sepatu kesayangan Anda. 
                    </p>
                    <a href="#" class="button a" id="a-4">
                      Find out more 
                      <span class="material-symbols-outlined">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
              </main>
            </a>
          </div>

        </div>

@endsection