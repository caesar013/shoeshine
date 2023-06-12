@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <h2 style="color: white">Service.</h2>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="card bg-gradient-default shadow">
            <div class="row ml-4 mt-4">
                <h3 style="color: white">Cleaning</h3>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem">
                            <img class="card-img-top" src="{{ asset('assets/img/1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Easy Wash</h4>
                            </div>
                            <button class="btn btn-primary" style="margin-left: 0.5rem" data-toggle="modal"
                                data-target="#exampleModal">Details</button>
                            <br>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Easy Wash</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h4>Layanan:<br>
                                        - Treatment membersihkan / cuci sepatu secara cepat khusus untuk sneakers/loafers.<br>
                                        - Aman untuk semua bahan dan warna sepatu.<br>
                                        - Dilakukan secara manual dan aman untuk semua jenis sepatu.<br>
                                        - Bagian yang di treatment: outsole dan midsole.<br>
                                        - Durasi pengerjaan sekitar 3 hari kerja.<br>
                                        - Harga terjangkau dengan teknisi yang berpengalaman serta bahan yang ramah
                                        lingkungan.<br>
                                    </h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/img/2.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Medium Wash</h4>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-left: 0.5rem">Details</a>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/img/3.png') }}" alt="Card image cap">
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
        <br>
        <div class="card bg-gradient-default shadow">
            <div class="row ml-4 mt-4">
                <h3 style="color: white">Extra Treatment</h3>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem">
                            <img class="card-img-top" src="{{ asset('assets/img/7.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Repair</h4>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-left: 0.5rem">Details</a>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/img/8.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Unyellowing</h4>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-left: 0.5rem">Details</a>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/img/9.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Repaint</h4>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-left: 0.5rem">Details</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card bg-gradient-default shadow">
            <div class="row ml-4 mt-4">
                <h3 style="color: white">Others</h3>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem">
                            <img class="card-img-top" src="{{ asset('assets/img/4.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Leather Care</h4>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-left: 0.5rem">Details</a>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/img/5.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Suede Care</h4>
                            </div>
                            <a href="#" class="btn btn-primary" style="margin-left: 0.5rem">Details</a>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/img/6.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Express</h4>
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
