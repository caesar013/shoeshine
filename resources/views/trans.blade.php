@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="table-responsive">
            <div>
                <table class="table align-items-center table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="shoe">Shoe</th>
                            <th scope="col" class="sort" data-sort="service">Service</th>
                            <th scope="col" class="sort" data-sort="arrived">Arrived</th>
                            <th scope="col" class="sort" data-sort="status">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($trans->count() > 0)
                            @foreach ($trans as $t)
                                <tr>
                                    <td>{{ $t-> }}</td>
                                    <td>{{ $t-> }}</td>
                                    <td>{{ $t-> }}</td>
                                    <td>{{ $t-> }}</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="4">
                                    Data tidak ada
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
