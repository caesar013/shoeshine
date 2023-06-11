@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <h2 style="color: white">SERVICE</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <br><br>
        
        <div class="row">
            <div class="col">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ 'assets/img/1.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Easy Wash</h4>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-left: 0.5rem">Details</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ 'assets/img/2.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Medium Wash</h4>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-left: 0.5rem">Details</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ 'assets/img/3.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Hard Wash</h4>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-left: 0.5rem">Details</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>



        </div>


        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('argon/vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush
