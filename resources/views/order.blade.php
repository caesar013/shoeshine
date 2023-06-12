@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <h2 style="color: white">Order Page</h2>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <div class="card bg-gradient-secondary shadow">
            <form>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label ml-3 mt-3">Shoe</label>
                    <select class="form-control ml-3" type="text" value="John Snow" id="example-text-input" style="width: 1158px">
                        <option value="1">qw</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label ml-3 mt-3">Service</label>
                    <select class="form-control ml-3" type="text" value="John Snow" id="example-text-input" style="width: 1158px">
                        <option value="1">qw</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="form-control bg-gradient-primary ml-3" style="width: 1158px; color: #f4f5f7"><b>+ Add New Order</b></button>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control bg-gradient-success ml-3" style="width: 1158px; color: #f4f5f7"><b>Submit</b></button>
                </div>
            </form>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
