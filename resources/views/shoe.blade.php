@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="table-responsive">
            <div>
                <table class="table align-items-center table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="">No.</th>
                            <th scope="col" class="sort" data-sort="material">Material</th>
                            <th scope="col" class="sort" data-sort="color">Color</th>
                            <th scope="col" class="sort" data-sort="model">Model</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($shoes as $shoe_foo => $shoe_bar)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $shoe_bar->material }}</td>
                                <td>{{ $shoe_bar->color }}</td>
                                <td>{{ $shoe_bar->model }}</td>
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
    <script src="{{ asset('argon/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('argon/vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush
