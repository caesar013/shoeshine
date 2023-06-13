@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="table-responsive">
            <div>
                <table class="table align-items-center table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="index">No.</th>
                            <th scope="col" class="sort" data-sort="shoe">Shoe</th>
                            <th scope="col" class="sort" data-sort="service">Service</th>
                            <th scope="col" class="sort" data-sort="arrived">Arrived</th>
                            <th scope="col" class="sort" data-sort="status">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $transaction_foo => $transaction_bar)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaction_bar->order->shoe->image }}</td>
                                <td>{{ $transaction_bar->order->service->name }}</td>
                                <td>{{ $transaction_bar->arrived }}</td>
                                <td>
                                    {{-- buttons --}}
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Data tidak ada</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
