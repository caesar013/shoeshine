@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="error"></div>

    <div class="row">
        <div class="col d-flex">
            <div class="m-3" style="width: 18rem;">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Transactions</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $transactions }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                    <i class="ni ni-chart-pie-35"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="m-3" style="width: 18rem;">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Income</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $income }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                    <i class="ni ni-chart-pie-35"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        $(document).ready(function() {
        });
    </script>

@endsection
