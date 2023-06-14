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
                <h3 style="color: white"><b>Cleaning</b></h3>
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
                                data-target="#easyWashModal">Details</button>
                            <br>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="easyWashModal" tabindex="-1" role="dialog"
                        aria-labelledby="easyWashModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="easyWashModalLabel">Easy Wash</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Layanan:<br><br>
                                        <ul>
                                            <li>Treatment membersihkan / cuci sepatu secara cepat khusus untuk
                                                sneakers/loafers.</li>
                                            <li>Aman untuk semua bahan dan warna sepatu.</li>
                                            <li>Dilakukan secara manual dan aman untuk semua jenis sepatu.</li>
                                            <li><b>Bagian yang di treatment: outsole dan midsole.</b></li>
                                            <li><b>Durasi pengerjaan sekitar 3 hari kerja.</b></li>
                                            <li>Harga terjangkau dengan teknisi yang berpengalaman serta bahan yang ramah
                                                lingkungan.</li>
                                        </ul>
                                    </h5>
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
                            <button class="btn btn-primary" style="margin-left: 0.5rem" data-toggle="modal"
                                data-target="#mediumWashModal">Details</button>
                            <br>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="mediumWashModal" tabindex="-1" role="dialog"
                        aria-labelledby="mediumWashModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="mediumWashModalLabel">Medium Wash</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Layanan:<br><br>
                                        <ul>
                                            <li>Treatment membersihkan / cuci sepatu secara cepat khusus untuk
                                                sneakers/loafers.</li>
                                            <li>Aman untuk semua bahan dan warna sepatu.</li>
                                            <li>Dilakukan secara manual dan aman untuk semua jenis sepatu.</li>
                                            <li><b>Bagian yang di treatment: upper, outsole dan midsole.</b></li>
                                            <li><b>Durasi pengerjaan sekitar 3 hari kerja.</b></li>
                                            <li>Harga terjangkau dengan teknisi yang berpengalaman serta bahan yang ramah
                                                lingkungan.</li>
                                        </ul>
                                    </h5>
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
                            <img class="card-img-top" src="{{ asset('assets/img/3.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Hard Wash</h4>
                            </div>
                            <button class="btn btn-primary" style="margin-left: 0.5rem" data-toggle="modal"
                                data-target="#hardWashModal">Details</button>
                            <br>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="hardWashModal" tabindex="-1" role="dialog"
                        aria-labelledby="hardWashModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="hardWashModalLabel">Hard Wash</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Layanan:<br><br>
                                        <ul>
                                            <li>Treatment membersihkan / cuci sepatu secara cepat khusus untuk
                                                sneakers/loafers.</li>
                                            <li>Aman untuk semua bahan dan warna sepatu.</li>
                                            <li>Dilakukan secara manual dan aman untuk semua jenis sepatu.</li>
                                            <li><b>Bagian yang di treatment: upper, insole, outsole, dan midsole.</b></li>
                                            <li><b>Durasi pengerjaan sekitar 4 hari kerja.</b></li>
                                            <li>Harga terjangkau dengan teknisi yang berpengalaman serta bahan yang ramah
                                                lingkungan.</li>
                                        </ul>
                                    </h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card bg-gradient-default shadow">
            <div class="row ml-4 mt-4">
                <h3 style="color: white"><b>Extra Treatment</b></h3>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem">
                            <img class="card-img-top" src="{{ asset('assets/img/7.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Repair</h4>
                            </div>
                            <button class="btn btn-primary" style="margin-left: 0.5rem" data-toggle="modal"
                                data-target="#repairModal">Details</button>
                            <br>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="repairModal" tabindex="-1" role="dialog"
                        aria-labelledby="repairModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="repairModalLabel">Repair</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Layanan:<br><br>
                                        <ul>
                                            <li>Treatment memperbaiki sepatu secara cepat khusus untuk semua jenis sepatu.
                                            </li>
                                            <li>Aman untuk semua bahan sepatu.</li>
                                            <li>Dilakukan secara manual.</li>
                                            <li>Bagian yang di treatment semua bagian sepatu.</li>
                                            <li>Durasi pengerjaan sekitar 5 hari kerja.</li>
                                            <li>Harga terjangkau dengan teknisi yang berpengalaman serta bahan yang ramah
                                                lingkungan.</li>
                                        </ul>
                                    </h5>
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
                            <img class="card-img-top" src="{{ asset('assets/img/8.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Unyellowing</h4>
                            </div>
                            <button class="btn btn-primary" style="margin-left: 0.5rem" data-toggle="modal"
                                data-target="#unyellowingModal">Details</button>
                            <br>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="unyellowingModal" tabindex="-1" role="dialog"
                        aria-labelledby="unyellowingModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="unyellowingModalLabel">Unyellowing</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Layanan:<br><br>
                                        <ul>
                                            <li>Treatment memutihkan sepatu secara cepat khusus untuk sepatu putih yang
                                                sudah menguning.</li>
                                            <li>Aman untuk semua bahan sepatu.</li>
                                            <li>Dilakukan secara manual.</li>
                                            <li>Bagian yang di treatment semua bagian sepatu.</li>
                                            <li>Durasi pengerjaan sekitar 3 hari kerja.</li>
                                            <li>Harga terjangkau dengan teknisi yang berpengalaman serta bahan yang ramah
                                                lingkungan.</li>
                                        </ul>
                                    </h5>
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
                            <img class="card-img-top" src="{{ asset('assets/img/9.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Repaint</h4>
                            </div>
                            <button class="btn btn-primary" style="margin-left: 0.5rem" data-toggle="modal"
                                data-target="#repaintModal">Details</button>
                            <br>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="repaintModal" tabindex="-1" role="dialog"
                        aria-labelledby="repaintModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="repaintModalLabel">Repaint</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Layanan:<br><br>
                                        <ul>
                                            <li>Treatment mewarnai kembali sepatu secara cepat khusus untuk semua jenis
                                                sepatu.</li>
                                            <li>Aman untuk semua bahan sepatu.</li>
                                            <li>Dilakukan secara manual.</li>
                                            <li>Bagian yang di treatment semua bagian sepatu.</li>
                                            <li>Durasi pengerjaan sekitar 5 hari kerja.</li>
                                            <li>Harga terjangkau dengan teknisi yang berpengalaman serta bahan yang ramah
                                                lingkungan.</li>
                                        </ul>
                                    </h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card bg-gradient-default shadow">
            <div class="row ml-4 mt-4">
                <h3 style="color: white"><b>Others</b></h3>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body pb-3">
                        <div class="card" style="width: 18rem">
                            <img class="card-img-top" src="{{ asset('assets/img/4.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Leather Care</h4>
                            </div>
                            <button class="btn btn-primary" style="margin-left: 0.5rem" data-toggle="modal"
                                data-target="#leatherModal">Details</button>
                            <br>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="leatherModal" tabindex="-1" role="dialog"
                        aria-labelledby="leatherModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="leatherModalLabel">Leather Care</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Layanan:<br><br>
                                        <ul>
                                            <li>Treatment membersihkan / cuci sepatu secara cepat khusus untuk leather.</li>
                                            <li>Aman untuk semua bahan leather.</li>
                                            <li>Dilakukan secara manual.</li>
                                            <li>Bagian yang di treatment: upper, outsole, insole, dan midsole.</li>
                                            <li>Durasi pengerjaan sekitar 3 hari kerja.</li>
                                            <li>Harga terjangkau dengan teknisi yang berpengalaman serta bahan yang ramah
                                                lingkungan.</li>
                                        </ul>
                                    </h5>
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
                            <img class="card-img-top" src="{{ asset('assets/img/5.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Suede Care</h4>
                            </div>
                            <button class="btn btn-primary" style="margin-left: 0.5rem" data-toggle="modal"
                                data-target="#suedeModal">Details</button>
                            <br>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="suedeModal" tabindex="-1" role="dialog"
                        aria-labelledby="suedeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="suedeModalLabel">Suede Care</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Layanan:<br><br>
                                        <ul>
                                            <li>Treatment membersihkan / cuci sepatu secara cepat khusus untuk suede.</li>
                                            <li>Aman untuk semua bahan suede.</li>
                                            <li>Dilakukan secara manual.</li>
                                            <li>Bagian yang di treatment: upper, outsole, insole, dan midsole.</li>
                                            <li>Durasi pengerjaan sekitar 4 hari kerja.</li>
                                            <li>Harga terjangkau dengan teknisi yang berpengalaman serta bahan yang ramah
                                                lingkungan.</li>
                                        </ul>
                                    </h5>
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
                            <img class="card-img-top" src="{{ asset('assets/img/6.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Express</h4>
                            </div>
                            <button class="btn btn-primary" style="margin-left: 0.5rem" data-toggle="modal"
                                data-target="#expressModal">Details</button>
                            <br>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="expressModal" tabindex="-1" role="dialog"
                        aria-labelledby="expressModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="expressModalLabel">Express</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Layanan:<br><br>
                                        <ul>
                                            <li>Treatment membersihkan / cuci sepatu secara cepat khusus untuk
                                                sneakers/loafers.</li>
                                            <li>Aman untuk semua bahan dan warna sepatu.</li>
                                            <li>Dilakukan secara manual dan aman untuk semua jenis sepatu.</li>
                                            <li><b>Pengerjaan dapat ditunggu di workshop.</b></li>
                                            <li>Bagian yang di treatment: upper dan midsole.</li>
                                            <li>Durasi pengerjaan sekitar 1 jam.</li>
                                            <li>Harga terjangkau dengan teknisi yang berpengalaman serta bahan yang ramah
                                                lingkungan.</li>
                                        </ul>
                                    </h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('argon/vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush
